<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // public function __construct(ServiceRepository, $repo)
    // {
    //     return $this->$repo;

    // }
    //INdex function
    public function index()
    {
        $services = ServiceRepository::query()->orderBy('order', 'asc')->get();
        return view('backend.service.index', compact('services'));
    }
    //Create function
    public function create()
    {
        return view('backend.service.create');
    }
    public function store(ServiceRequest $request)
    {
        ServiceRepository::storeByRequest($request);
        return back()->with('success', 'Service hass been created!');
    }
    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }
    public function update(ServiceRequest $request, Service $service)
    {
        ServiceRepository::updateByRequest($request, $service);
        return back()->with('success', 'Service hass been updated!');
    }
    public function show(Service $service)
    {
        return view('backend.service.show', compact('service'));
    }
    public function destroy(Service $service)
    {
        $thumbnail = $service->thumbnail;
        $icon = $service->icon;
        //Unlik thumbnail
        $filePath = public_path($thumbnail);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        //Unlik Icon
        $filePath = public_path($icon);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $service->delete();
        return back()->with('success', 'Service has been deleted!');
    }
    public function status_update(Request $request)
    {
        $service = Service::where(['id' => $request['id']])->first();
        $status = false;
        if ($request->status == 1) {
            $status = true;
        }
        $service->update([
            'status' => $status
        ]);
        return response()->json([
            'success' => 1,
        ], 200);
    }
}
