<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use App\Repositories\AdminRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //Create a admin
    public function index()
    {
        $admins = AdminRepository::query()->where('role','!=','user')->get();
        return view('backend.profile.index_admin', compact('admins'));
    }

    public function create()
    {
        return view('backend.profile.create_admin');
    }

    public function store(AdminRequest $request)
    {
        $getRole = AdminRepository::adminStoreByRequest($request);
        $role = ucfirst($getRole->role);
        return redirect()->route('admin.index')->with('success', $role .' is created successfully!');
    }

    public function edit(User $user)
    {
        $admin = $user;
        return view('backend.profile.edit_admin', compact('admin'));
    }
    public function update(AdminRequest $request, User $user)
    {
        AdminRepository::adminUpdateByRequest($request, $user);
        $role = ucfirst($user->role);
        return redirect()->route('admin.index')->with('success', $role . ' is updated successfully!');
    }
    //End create a admin function
    // Admin profule functions
    public function profile(){
        return view('backend.profile.profile');
    }
    public function profileUpdate(AdminProfileRequest $request, User $user)
    {

        AdminRepository::adminProfileUpdate($request, $user);
        return back()->with('success', 'Profile is updated successfully!');
    }
    public function cPassword()
    {
        return view('backend.profile.edit-password');
    }

    public function upassword(Request $request, User $user)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ]);
        $admin = $user;
        $checkPassword = Hash::check($request->current_password, $admin->password);

        if ($checkPassword) {
            $admin->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with('success', 'Password has been changed successfully!');
        } else {
            return back()->with('error', 'Sorry! Your current password dost not match.');
        }
    }
}
