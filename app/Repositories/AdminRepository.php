<?php

namespace App\Repositories;

use App\Http\Requests\AdminProfileRequest;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminRepository extends Repository
{
    public static function model()
    {
        return User::class;
    }

    public static function adminStoreByRequest(AdminRequest $request): User
    {
        $file = $request->file('image');
        $imagePath = null;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'admin' . '_' . uniqid() . '.' . $extension;
            $file->move(public_path('uploaded/admin'), $fileName);
            $imagePath = '/uploaded/admin/' . $fileName;
        }
        $adminCreate = self::create( [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'role' => $request->role,
            'email' => $request->email,
            'phone' => $request->mobile,
            'gender' => $request->gender,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'image' => $imagePath,
        ]);
        return $adminCreate;
    }
    public static function adminUpdateByRequest(AdminRequest $request, User $user)
    {
        $admin = $user;
        $file = $request->file('image');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'admin' . '_' . uniqid() . '.' . $extension;
            if ($admin->image) {
                unlink(public_path($admin->image));
            }
            $file->move(public_path('uploaded/admin'), $fileName);
            $imagePath = '/uploaded/admin/' . $fileName;
        }
        $adminUpdate = self::update($admin, [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'role' => $request->role,
            'email' => $request->email,
            'phone' => $request->mobile,
            'gender' => $request->gender,
            'address' => $request->address,
            'image' => $imagePath ?? $admin->image,
        ]);
        return $adminUpdate;
    }
    //End Admin Create and update

    //Admin profile update
    public static function adminProfileUpdate(AdminProfileRequest $request, User $user){

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
        $adminProfile = self::update($user, [
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
