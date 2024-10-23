<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function adminLogin()
    {
        if (auth()->check()) {
            $checkAdmin = Auth::user()->role == 'admin' || Auth::user()->role == 'editor' || Auth::user()->role == 'manager';
            if ($checkAdmin) {
                return to_route('admin.dashboard');
            }
        }
        return view('auth.admin_login');
    }
    public function adminStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $adminUser = UserRepository::query()->where('email', $request->email)->first();
        if ($adminUser) {
            if ($adminUser->status == true) {
                if (auth()->attempt($request->only('email', 'password'))) { //smdsiddiqurrahman68@

                    return to_route('admin.dashboard')->with('success', 'Successfully Login!');
                } else {
                    return to_route('adminLogin')->with('error', 'Oppes! Somethis want wrong. Please try again');
                }
            } else {
                return back()->with('error', 'Oppes! Your account has been deactivated!');
            }
        } else {
            return to_route('adminLogin')->with('error', 'Oppes! You have entered invalid credentials');
        }
        // if ($adminUser->status == true) {//01703118126
        //     if (auth()->attempt($request->only('email', 'password'))) {//smdsiddiqurrahman68@

        //         return to_route('admin.dashboard')->with('success', 'Successfully Login!');
        //     } else {
        //         return to_route('adminLogin')->with('error', 'Oppes! You have entered invalid credentials');
        //     }
        // } else {
        //     return back()->with('error', 'Oppes! Your account has been deactivated!');
        // }
    }
}
