<?php

namespace App\Http\Controllers;

use App\DataTables\LayoutDataTable;
use App\Helpers\ImageKitHelper;
use App\Models\Layout;
use App\Models\Media;
use App\Models\NearByLocation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LayoutController extends Controller
{
    public function index(LayoutDataTable $layoutDataTable)
    {
        return $layoutDataTable->render('app.layouts.index');

    }
    public function create()
    {
        return view('app.layouts.create');

    }

    public function show(string $name_slug)
    {
        try {
            $layout = Cache::rememberForever('layout-'.$name_slug, function () use ($name_slug) {
                return Layout::with(['media', 'nearbyLocations'])->where('name_slug', $name_slug)->first();
            });

            if (!$layout) {
                abort(404, 'Layout not found');
            }

            $layouts = Cache::remember($name_slug.'-layouts', 43200, function () use ($layout) {
                $layouts = Layout::with('media')->get();
                info($layouts);
                $filtered = $layouts->reject(function ($item) use ($layout) {
                    return $item->name_slug == $layout->name_slug;
                });
                info($filtered->all());
                
                return $filtered->sortByDesc('status')->all();
            });

            return view('/layouts', ['layout' => $layout, 'medias' => $layout->media, 'nearbylocations' => $layout->nearbyLocations, 'layouts' => $layouts]);
        } catch (Exception $e) {
            abort(500, $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'google_map' => 'nullable|string',
            'state' => 'nullable|string|max:255',
            'video' => 'nullable|string',
            'status' => 'nullable|in:0,1', // 0 for 'coming soon', 1 for 'live'
            'location_name.*' => 'nullable|string|max:255',
            'distance.*' => 'nullable',
            // 'media_url.*' => 'nullable|image',
            'content_location.*' => 'nullable|in:description,thumbnail,property-detail',
            'site_measurements' => 'nullable'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        try {
            DB::beginTransaction();

            $data = $validator->validated();
            $data['name_slug'] = generateSlug($data['name']); // Generate slug

            // Create the layout
            $layout = Layout::create([
                'name' => $data['name'],
                'location' => $data['location'],
                'description' => $data['description'],
                'google_map' => $data['google_map'],
                'state' => $data['state'],
                'status' => $data['status'],
                'video' => $data['video'],
                'name_slug' => $data['name_slug'],
                'site_measurements' => $data['site_measurements']
            ]);

            // Save nearby locations
            if (!empty($data['location_name']) && is_array($data['location_name'])) {
                foreach ($data['location_name'] as $index => $locationName) {
                    if (!empty($locationName)) {
                        NearByLocation::create([
                            'layout_id' => $layout->id,
                            'location_name' => $locationName,
                            'distance' => $data['distance'][$index] ?? 0,
                        ]);
                    }
                }
            }
            // if (!empty($data['media_url']) && is_array($data['media_url'])) {
            //     foreach ($data['media_url'] as $index => $mediaType) {
            //         if (!empty($mediaType) && !empty($data['media_url'][$index])) {
            //             $media = $data['media_url'][$index];
            //             $location = $request->input('content_location')[$index] ?? 'description';

            //             $option = [
            //                 'directImage' => true,
            //                 'concat' => $location . '-'
            //             ];
            //             $fullUrl = storeImage($media, false, $option);


            //             Media::create([
            //                 'layout_id' => $layout->id,
            //                 'url' => $fullUrl,
            //                 'media_location' => $location,
            //             ]);
            //         }
            //     }
            // }

            DB::commit();

            Cache::forget('home-layouts');

            return redirect()->route('layouts.index')
                ->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'New Layout Added!'
                ]);

        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with([
                    'alert' => true,
                    'alertColor' => 'red',
                    'message' => $e->getMessage()
                ]);
        }
    }

    public function update(Request $request, $id)
    {
        $layout = Layout::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'google_map' => 'nullable|string',
            'video' => 'nullable|string',
            'state' => 'nullable|string|max:255',
            'status' => 'nullable|in:0,1', // 0 for 'coming soon', 1 for 'live'
            'location_name.*' => 'nullable|string|max:255',
            'distance.*' => 'nullable',
            // 'media_url.*' => 'nullable',
            'content_location.*' => 'nullable|in:description,thumbnail,property-detail',
            'site_measurements' => 'nullable'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        try {
            DB::beginTransaction();

            $data = $validator->validated();
            $data['name_slug'] = generateSlug($data['name']); //

            // Update the layout
            $layout->update([
                'name' => $data['name'],
                'location' => $data['location'],
                'description' => $data['description'],
                'google_map' => $data['google_map'],
                'state' => $data['state'],
                'video' => $data['video'],
                'status' => $data['status'],
                'name_slug' => $data['name_slug'],
                'site_measurements' => $data['site_measurements']
            ]);

            NearByLocation::where('layout_id', $id)->delete();
            // Media::where('layout_id', $id)->delete();

            // Save nearby locations
            if (!empty($data['location_name']) && is_array($data['location_name'])) {
                foreach ($data['location_name'] as $index => $locationName) {
                    if (!empty($locationName)) {
                        NearByLocation::create([
                            'layout_id' => $layout->id,
                            'location_name' => $locationName,
                            'distance' => $data['distance'][$index] ?? 0,
                        ]);
                    }
                }
            }


            // Save media
            // if (!empty($data['media_url']) && is_array($data['media_url'])) {
            //     foreach ($data['media_url'] as $index => $mediaType) {
            //         if (!empty($mediaType) && !empty($data['media_url'][$index])) {
            //             $media = $data['media_url'][$index];
            //             $location = $request->input('content_location')[$index] ?? 'description';

            //             $option = [
            //                 'directImage' => true,
            //                 'concat' => $location . '-'
            //             ];
            //             $fullUrl = storeImage($media, false, $option);

            //             Media::create([
            //                 'layout_id' => $layout->id,
            //                 'url' => $fullUrl,
            //                 'media_location' => $location,
            //             ]);
            //         }
            //     }
            // }

            DB::commit();

            Cache::forget('home-layouts');
            Cache::forget('layout-'.$layout->name_slug);
            Cache::forget($layout->name_slug.'-layouts');

            return redirect()->route('layouts.index')
                ->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'Layout Updated!'
                ]);

        } catch (Exception $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with([
                    'alert' => true,
                    'alertColor' => 'red',
                    'message' => $e->getMessage()
                ]);
        }
    }

    public function edit(int $id)
    {

        $layout = Layout::findOrFail($id);
        $nearbylocations = $layout->nearbyLocations()->get();
        $media = $layout->media()->get();
        return view('app.layouts.edit', ['layout' => $layout, 'nearbylocations' => $nearbylocations, 'media' => $media]);

    }

    public function destroy(int $id)
    {
        try {
            DB::beginTransaction();
            $layout = Layout::with(['media', 'nearbyLocations'])->findOrFail($id);

            if ($layout->media->isNotEmpty()) {
                foreach ($layout->media as $media) {
                    deleteImage($media->url);
                }
            }
            
            Cache::forget('layout-'.$layout->name_slug);
            Cache::forget($layout->name_slug.'-layouts');

            $layout->nearbyLocations()->delete();
            $layout->delete();

            DB::commit();

            return redirect()->route('layouts.index')->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'Layout deleted successfully'
                ]);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->withInput()
                ->with([
                    'alert' => true,
                    'alertColor' => 'red',
                    'message' => $e->getMessage()
                ]);
        }


    }
}
