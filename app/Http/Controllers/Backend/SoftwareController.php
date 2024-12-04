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
        $softwares = SoftwareRepository::getAll();
        return view('backend.software.index',compact('softwares'));
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
    public function edit(Software $software){
        return view('backend.software.edit',compact('software'));
    }
    public function update(SoftwareRequest $request, Software $software)
    {
        SoftwareRepository::updateByRequest($request, $software);
        return back()->with('success', 'Software hass been updated!');
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
