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
        if($file){
            $extension = $file->getClientOriginalExtension();
            $fileName = 'thumbnail'.'_'. uniqid().'.'.$extension;
            $file->move(public_path('uploaded/software'), $fileName);
            $thumbnail = '/uploaded/software/'. $fileName;
        }

        $multiimage = [];
        $images = $request->file('images');
        //dd($images);
        if($images){
            foreach($images as $image){
                if($image){
                    $extension = $image->getClientOriginalExtension();
                    $imageName = 'image'.'_'. uniqid().'.'.$extension;
                    $image->move(public_path('uploaded/software/images'), $imageName);
                    $imagePath = '/uploaded/software/images/'. $imageName;
                    $multiimage [] = $imagePath;
                }
            }
            array_push($multiimage, $imagePath);
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
}
