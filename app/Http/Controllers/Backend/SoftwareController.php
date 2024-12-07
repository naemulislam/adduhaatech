<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SoftwareRequest;
use App\Models\Software;
use App\Repositories\SoftwareRepository;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    //INdex function
    public function index()
    {
        $softwares = SoftwareRepository::query()->orderBy('order', 'asc')->get();
        return view('backend.software.index', compact('softwares'));
    }
    //Create function
    public function create()
    {
        return view('backend.software.create');
    }
    public function store(SoftwareRequest $request)
    {
        SoftwareRepository::storeByRequest($request);
        return back()->with('success', 'Software hass been created!');
    }
    public function edit(Software $software)
    {
        return view('backend.software.edit', compact('software'));
    }
    public function update(SoftwareRequest $request, Software $software)
    {
        //dd($software);
        SoftwareRepository::updateByRequest($request, $software);
        return back()->with('success', 'Software hass been updated!');
    }
    public function show(Software $software)
    {
        return view('backend.software.show', compact('software'));
    }
    public function destroy(Software $software)
    {
        $thumbnail = $software->thumbnail;
        $images = json_decode($software->images);
        //Unlik thumbnail
        $filePath = public_path($thumbnail);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        //Unlink images
        if (count($images) > 0) {
            foreach ($images as $img) {
                $path = public_path($img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
        $software->delete();
        return back()->with('success', 'Software has been deleted!');
    }
    public function status_update(Request $request)
    {
        $software = Software::where(['id' => $request['id']])->first();
        $status = false;
        if ($request->status == 1) {
            $status = true;
        }
        $software->update([
            'status' => $status
        ]);
        return response()->json([
            'success' => 1,
        ], 200);
    }
}
