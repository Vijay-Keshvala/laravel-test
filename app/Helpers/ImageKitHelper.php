<?php

namespace App\Helpers;

use Exception;
use RuntimeException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use ImageKit\ImageKit;

class ImageKitHelper
{
    /**
     * Uploads a file to ImageKit using the provided credentials and configuration.
     * @param  $requestOrImage either entire user request on specific image file. if specific image file make $directImage to true . 
     * @param string $InputAttribute attrubte value of the name from the  element input from html 
     * @param string $subFolder subfolder name that file should be uploaded to imagekit 
     * @throws \RuntimeException If ImageKit credentials are missing or upload fails
     * @return string URL of the uploaded image on ImageKit
     */
    protected $imageKit;

    public function __construct(ImageKit $imageKit)
    {
        $this->imageKit = $imageKit;
    }

    public function upload($request)
    {
        $file = $request->file('image');
        $fileContents = file_get_contents($file->getPathname());

        $response = $this->imageKit->upload([
            'file' => base64_encode($fileContents),
            'fileName' => $file->getClientOriginalName()
        ]);

        return response()->json($response);
    }
    public static function storeImageOg($requestOrImage, string|bool $InputAttribute, string $subFolder = null, bool $directImage = false, string|bool $concat = false)
    {
        try {
            if ($directImage) {
                $file = $requestOrImage;
            } else {
                $file = $requestOrImage->file($InputAttribute);
            }

            $fileNameOriginal = $file->getClientOriginalName();
            $fileNameOld = pathinfo($fileNameOriginal, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = Str::slug($fileNameOld) . '_' . time() . '.' . $extension;
            $filename = $concat ? $concat . '-' . $filename : $filename;
            $path = $file->storeAs('moonstar/uploads/' . $subFolder, $filename, 'imagekit');
            $fullPath = env('IMAGEKIT_URL_ENDPOINT') . $path;
            
            return $fullPath;
        } catch (Exception $error) {
            return redirect()->back()->with(['alert' => true, 'alertColor' => 'red', 'message' => $error->getMessage()]);
        }
    }
    public static function storeImage($requestOrImage, string|bool $inputAttribute = false, array $options = [])
    {

        $defaultOptions = [
            'subFolder' => null,
            'directImage' => false,
            'concat' => false,
        ];

        $options = array_merge($defaultOptions, $options);


        try {


            $file = $options['directImage'] ? $requestOrImage : $requestOrImage->file($inputAttribute);
            if (!method_exists($file, 'getClientOriginalName')) {
                // return false;
                return $file;
            }
            $fileNameOriginal = $file->getClientOriginalName();


            $fileNameOld = pathinfo($fileNameOriginal, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $timestamp = time();
            $slugFileName = Str::slug($fileNameOld);
            // dd($fileNameOld);
            $filename = $options['concat'] ? "{$options['concat']}-{$slugFileName}_{$timestamp}.{$extension}" : "{$slugFileName}_{$timestamp}.{$extension}";

            $path = $file->storeAs("moonstar/uploads/{$options['subFolder']}", $filename, 'imagekit');
            // dd($path);
            $fullPath = config('services.imagekit.url_endpoint') . $path;

            return $fullPath;
        } catch (Exception $error) {
            throw new Exception($error->getMessage());
        }
    }

    public static function delete(string $fullImagePath)
    {
        try { 
            $path = Str::replaceFirst(env('IMAGEKIT_ENDPOINT'), '', $fullImagePath);
            $res = Storage::disk('imagekit')->exists($path);
               
            if (!$res) {
                throw new \Exception('image not found.');
            };

            Storage::disk('imagekit')->delete($path);

            return true;
        } catch (Exception $error) {
            throw new Exception($error->getMessage());
        }
    }
}
