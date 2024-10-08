<?php

namespace App\Repositories;

use Arafat\LaravelRepository\Repository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserRepository extends Repository
{
    public static function model()
    {
        return User::class;
    }

    public static function adminStoreByRequest(Request $request): User
    {
        return self::create([
            //
        ]);
    }

    public static function updateByRequest(Request $request, User $user): User
    {
        $user->update([
            //
        ]);
        return $user;
    }
}
