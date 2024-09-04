<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralSettingRequest;
use App\Models\GeneralSetting;
use App\Repositories\GeneralSettingRepository;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index(){
        $setting = GeneralSetting::latest()->first();
        return view('backend.setting.setting',compact('setting'));
    }
    public function update(GeneralSettingRequest $request, GeneralSetting $generalSetting){
        GeneralSettingRepository::storyByRequest($request, $generalSetting);
        return back()->with('success', 'Setting is updated successfully!');
    }
}
