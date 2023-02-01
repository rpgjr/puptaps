<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    //
    public function getProfileIndex() {
        $courses = Courses::all();
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $title = "Profile Settings";
        $message = "Profile successfully updated.";
        return view('user.profile.index', compact(['courses', 'users', "title", "message"]));
    }

    public function updateProfile(Request $request, $alumni_id) {

        if($request->hasFile('user_pfp')) {
            $alumni = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
            foreach($alumni as $image) {
                if(!($image->user_pfp) == null) {
                    unlink("Uploads/Profiles/".$image->user_pfp);
                }
            }


            $file = $request->file('user_pfp');
            $extension = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move('Uploads/Profiles/', $fileName);
            $account = Alumni::where('alumni_id', '=', $alumni_id)->update([
                'user_pfp' => $fileName,
            ]);
        }

        $request->validate([
            'last_name'     => 'required',
            'first_name'    => 'required',
            'middle_name'   => 'required',
            'course_id'     => 'required',
            'batch'         => 'required',
            'sex'           => 'required',
            'birthday'      => 'required',
            'username'      => 'required',
        ]);

        $change_password = false;

        if(($request->input('password')) != null ) {
            $request->validate([
                'password'  => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $account = Alumni::where('alumni_id', '=', $alumni_id)->update([
                'password' => Hash::make($request->input('password'))
            ]);

            $users = User::where('alumni_id', '=', Auth::user()->alumni_id)->update([
                'password' => Hash::make($request->input('password'))
            ]);

            $change_password = true;
        }

        $account = Alumni::where('alumni_id', '=', $alumni_id)->update([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'suffix' => $request->input('suffix'),
            'course_id' => $request->input('course_id'),
            'batch' => $request->input('batch'),
            'sex' => $request->input('sex'),
            'birthday' => $request->input('birthday'),
            'age' => $request->input('age'),
            'religion' => $request->input('religion'),
            'civil_status' => $request->input('civil_status'),
            'number' => $request->input('number'),
            'city_address' => $request->input('city_address'),
            'provincial_address' => $request->input('provincial_address'),
            'username' => $request->input('username'),
        ]);

        $users = User::where('alumni_id', '=', Auth::user()->alumni_id)->update([
            'username' => $request->input('username'),
        ]);

        if($account || $change_password) {
            return back()
                   ->with(
                        'success',
                        ''
                    );
        }
        else {
            return back()
                   ->with(
                        'fail',
                        'There is an Error Occured'
                    );
        }
    }
}
