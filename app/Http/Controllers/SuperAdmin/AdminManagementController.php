<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminManagementController extends Controller
{
    public function getAddNewAdmin() {
        return view("super_admin.admin_management.add-admin");
    }

    public function getAdminManager() {

        $admins = Admin::all();
        return view("super_admin.admin_management.admin-manager", compact("admins"));
    }

    public function saveNewAdmin(Request $request) {
        $request->validate([
            'last_name'     => ['required'],
            'first_name'    => ['required'],

            'email'         => ['required', 'string', 'email', 'max:255', 'unique:tbl_admin'],
            'username'      => ['required', 'unique:tbl_admin'],
            'password'      => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        $admin = new Admin();
        $admin->last_name   = $request->input("last_name");
        $admin->first_name  = $request->input("first_name");
        $admin->middle_name = $request->input("middle_name");
        $admin->suffix      = $request->input("suffix");
        $admin->email       = $request->input("email");
        $admin->username    = $request->input("username");
        $admin->password    = Hash::make($request->input('password'));
        $admin->user_role   = "Admin";
        $admin->save();

        $admin_account = Admin::where("username", "=", $request->input("username"))->get();
        $user = new User();
        foreach($admin_account as $account) {
            $user->admin_id             = $account->admin_id;
            $user->email                = $account->email;
            $user->email_verified_at    = $account->created_at;
            $user->username             = $account->username;
            $user->password             = $account->password;
            $user->user_role            = $account->user_role;

            $user->save();
        }

        return back()->with('success', 'Admin successfully added!');
    }

    public function deleteAdmin(Request $request) {
        $user = User::where('admin_id', '=', $request->admin_id)->first();
        $user->delete();

        $admin = Admin::where('admin_id', '=', $request->admin_id)->first();
        $admin->delete();

        return back()->with('success', 'Admin successfully removed!');
    }
}
