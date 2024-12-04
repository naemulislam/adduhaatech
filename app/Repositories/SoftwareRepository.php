<?php

namespace App\Repositories;

use App\Http\Requests\SoftwareRequest;
use App\Models\Software;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoftwareRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Software::class;
    }

    public static function storeByRequest(SoftwareRequest $request)
    {
        $thumbnail = null;
        $file = $request->file('thumbnail');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'thumbnail' . '_' . uniqid() . '.' . $extension;
            $file->move(public_path('uploaded/software'), $fileName);
            $thumbnail = '/uploaded/software/' . $fileName;
        }

        $multiimage = [];
        $images = $request->file('images');

        if ($images) {
            foreach ($images as $image) {
                if ($image) {
                    $extension = $image->getClientOriginalExtension();
                    $imageName = 'image_' . uniqid() . '.' . $extension;
                    $image->move(public_path('uploaded/software/images'), $imageName);
                    $imagePath = '/uploaded/software/images/' . $imageName;

                    $multiimage[] = $imagePath;
                }
            }
        }
        return self::create([
            'name' => $request->software_name,
            'slug' => Str::slug($request->software_name),
            'description' => $request->description,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'images' => json_encode($multiimage)
        ]);
    }
    public static function updateByRequest(SoftwareRequest $request, Software $software)
    {
        $file = $request->file('thumbnail');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'thumbnail' . '_' . uniqid() . '.' . $extension;
            if ($software->thumbnail) {
                $filePath = public_path($software->thumbnail);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                unlink(public_path($software->thumbnail));
            }
            $file->move(public_path('uploaded/software'), $fileName);
            $thumbnail = '/uploaded/software/' . $fileName;
        }

        $existingImages = json_decode($software->images) ?? []; // Existing images
        $uploadedImages = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $imageName = 'image_' . uniqid() . '.' . $extension;

                $image->move(public_path('uploaded/software/images'), $imageName);
                $uploadedImages[] = '/uploaded/software/images/' . $imageName;
            }
        }
        if ($request->has('delete_images')) {
            $imagesToDelete = $request->input('delete_images');
            $existingImages = array_diff($existingImages, $imagesToDelete);

            // Optionally delete the files from the server
            foreach ($imagesToDelete as $image) {
                $filePath = public_path($image);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }


        $allImages = array_merge($existingImages, $uploadedImages);
        return self::update($software,[
            'name' => $request->software_name,
            'slug' => Str::slug($request->software_name),
            'description' => $request->description,
            'order' => $request->order,
            'thumbnail' => $thumbnail ?? $software->thumbnail,
            'images' => json_encode($allImages)
        ]);
    }
}
