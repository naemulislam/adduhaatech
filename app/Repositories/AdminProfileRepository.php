<?php

namespace App\Repositories;

use App\Http\Requests\AdminProfileRequest;
use App\Models\User;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class AdminProfileRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return User::class;
    }

    public static function storeByRequest(Request $request)
    {
       self::create([
            //
       ]);
    }
    public static function updateByRequest(AdminProfileRequest $request, User $admin){
        $file = $request->file('profile_image');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = 'admin' . '_' . uniqid() . '.' . $extension;
            if ($admin->image) {
                unlink(public_path($admin->image));
            }
            $file->move(public_path('uploaded/admin'), $fileName);
            $imagePath = '/uploaded/admin/' . $fileName;
        }
        $adminProfile = self::update($admin, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'address' => $request->address,
            'image' => $imagePath ?? $admin->image,
        ]);
        return $adminProfile;
    }
}
