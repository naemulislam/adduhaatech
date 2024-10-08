<?php

namespace App\Repositories;

use App\Http\Requests\GeneralSettingRequest;
use App\Models\GeneralSetting;
use Arafat\LaravelRepository\Repository;

class GeneralSettingRepository extends Repository
{
    public static function model()
    {
        return GeneralSetting::class;
    }

    public static function storyByRequest(GeneralSettingRequest $request, GeneralSetting $generalSetting){

        $webLogo = $request->file('logo');
        if ($webLogo) {
            $extension = $webLogo->getClientOriginalExtension();
            $fileName = 'logo'. '_' . uniqid() . '.' .$extension;
            if($generalSetting?->logo){
                unlink(public_path($generalSetting->logo));
            }
            $webLogo->move(public_path('uploaded/settings'), $fileName);
            $logo = '/uploaded/settings/' . $fileName;
        }
        $favicon = $request->file('favicon');
        if ($favicon) {
            $extension = $favicon->getClientOriginalExtension();
            $fileName = 'favicon'. '_' . uniqid() . '.' .$extension;
            if($generalSetting?->favicon){
                unlink(public_path($generalSetting->favicon));
            }
            $favicon->move(public_path('uploaded/settings'), $fileName);
            $faviconLogo = '/uploaded/settings/' . $fileName;
        }
        $createOrupdate = self::query()->updateOrCreate([
            'id' => $generalSetting->id ?? 0,
        ],[
            'site_name' => $request->site_name,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'web_address' => $request->web_address,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'logo' => $logo ?? $generalSetting->logo,
            'favicon' => $faviconLogo ?? $generalSetting->favicon,
            'm_title' => $request->m_title,
            'm_description' => $request->m_description,
            'm_keyword' => $request->m_keyword,

        ]);
        return $createOrupdate;
    }
}
