<?php

namespace App\Repositories;

use App\Http\Requests\AdminProfileRequest;
use App\Models\User;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class AdminProfileRepository extends Repository
{
    public static function model()
    {
        return User::class;
    }

    // public static function storeByRequest(Request $request)
    // {
    //    self::create([
    //    ]);
    // }
    public static function updateByRequest(AdminProfileRequest $request, User $user){
        //dd($user->id);
        $file = $request->file('profile_image');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'admin' . '_' . uniqid() . '.' . $extension;
            if ($user->image) {
                unlink(public_path($user->image));
            }
            $file->move(public_path('uploaded/admin'), $fileName);
            $imagePath = '/uploaded/admin/' . $fileName;
        }
        $adminProfile = self::update($user,[
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'image' => $imagePath ?? $user->image,
        ]);
        return $adminProfile;
    }
}
