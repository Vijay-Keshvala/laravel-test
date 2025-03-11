<?php

namespace App\Http\Controllers;

use App\Helpers\ImageKitHelper;
use App\Models\Layout;
use App\Models\Media;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $slug)
    {
        $layout = Layout::with('media')->where('name_slug', $slug)->first();

        if(!$layout){
            abort(404, 'layout not found');
        }

        return view('app.layouts.medias.index', ['layout' => $layout]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $slug)
    {
        $request->validate([
            'image' => 'required|image',
            'location' => 'required|in:description,thumbnail,property-detail',
        ]);

        try {
            $layout = Layout::where('name_slug', $slug)->first();

            if(!$layout){
                abort(404, 'Layout not found');
            }

            if($request->hasFile('image')){
                $url = $this->storeImage($request->file('image'), 'layouts');
            }

            if(!$url){
                throw new \Exception('failed uploading file to imagekit server');
            }

            DB::beginTransaction();

            Media::create([
                'layout_id' => $layout->id,
                'url' => $url,
                'media_location' => $request->location,
            ]);

            DB::commit();

            Cache::forget('layout-'.$layout->name_slug);
            Cache::forget('home-layouts');

            return redirect()->back()
                ->withInput()
                ->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'Image added to the layout'
                ]);
        } catch (Exception $error) {
            DB::rollBack();
            return redirect()->back()
                ->withInput()
                ->with([
                    'alert' => true,
                    'alertColor' => 'red',
                    'message' => $error->getMessage()
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug, string $id)
    {
        try {
            DB::beginTransaction();

            $media = Media::findOrFail($id);
            
            $status = ImageKitHelper::delete($media->url);

            if(!$status){
                throw new \Exception('Could not delete image');
            }

            $media->delete();

            DB::commit();

            Cache::forget('layout-'.$slug);
            Cache::forget('home-layouts');

            return redirect()->back()
                ->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'Media deleted successfully'
                ]);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with([
                    'alert' => true,
                    'alertColor' => 'red',
                    'message' => $e->getMessage()
                ]);
        }
    }

    protected static function storeImage($file, string|null $folder)
    {
        try{
            $fileNameOriginal = $file->getClientOriginalName();
            $fileNameOld = pathinfo($fileNameOriginal, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = Str::slug($fileNameOld).'_'.time().'.'.$extension;
            $image = $file;
            
            $path = $image->storeAs('moonstar/'.$folder, $filename, 'imagekit');

            if(!$path){
                throw new \Exception('failed uploading file to imagekit server');
            }
            
            Cache::forget('home-layouts');

            return env('IMAGEKIT_ENDPOINT').$path;
        }catch(\Exception $error){
            throw new \Exception($error->getMessage());
        }
    }
}
