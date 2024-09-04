<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        //return "ok";
        if (auth()->check()) {
            $checkAdmin = Auth::user()->role == 'admin' || Auth::user()->role == 'editor' || Auth::user()->role == 'manager';
            if ($checkAdmin) {
                return view('backend.dashboard');
            }
        }
        return to_route('adminLogin');
    }
    public function adminLogout()
    {
        auth()->logout();
        return to_route('adminLogin')->with('success', 'Logout successfully!');
    }
}
