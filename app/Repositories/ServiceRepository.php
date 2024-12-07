<?php

namespace App\Repositories;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Service::class;
    }

    public static function storeByRequest(ServiceRequest $request)
    {
        $thumbnail = null;
        $file = $request->file('thumbnail');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'thumbnail' . '_' . uniqid() . '.' . $extension;
            $file->move(public_path('uploaded/service'), $fileName);
            $thumbnail = '/uploaded/service/' . $fileName;
        }
        $icon = null;
        $file = $request->file('icon');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'icon' . '_' . uniqid() . '.' . $extension;
            $file->move(public_path('uploaded/service'), $fileName);
            $icon = '/uploaded/service/' . $fileName;
        }

        return self::create([
            'name' => $request->service_name,
            'slug' => Str::slug($request->service_name),
            'description' => $request->description,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'icon' => $icon
        ]);
    }
    public static function updateByRequest(ServiceRequest $request, Service $service)
    {
        $file = $request->file('thumbnail');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'thumbnail' . '_' . uniqid() . '.' . $extension;
            if ($service->thumbnail) {
                $filePath = public_path($service->thumbnail);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            $file->move(public_path('uploaded/service'), $fileName);
            $thumbnail = '/uploaded/service/' . $fileName;
        }
        $file = $request->file('icon');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'icon' . '_' . uniqid() . '.' . $extension;
            if ($service->thumbnail) {
                $filePath = public_path($service->icon);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            $file->move(public_path('uploaded/service'), $fileName);
            $icon = '/uploaded/service/' . $fileName;
        }


        return self::update($service,[
            'name' => $request->service_name,
            'slug' => Str::slug($request->service_name),
            'description' => $request->description,
            'order' => $request->order,
            'thumbnail' => $thumbnail ?? $service->thumbnail,
            'icon' => $icon ?? $service->icon
        ]);
    }
}
