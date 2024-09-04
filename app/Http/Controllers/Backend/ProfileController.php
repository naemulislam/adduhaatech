<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use App\Models\User;
use App\Repositories\AdminProfileRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('backend.profile.profile');
    }
    public static function profileUpdate(AdminProfileRequest $request, User $admin)
    {
        AdminProfileRepository::updateByRequest($request, $admin);


    }
}
