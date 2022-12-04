<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function getProfileIndex() {
        $courses = Courses::all();
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $title = "Profile Settings";
        return view('user.profile.index', compact(['courses', 'users', "title"]));
    }

    public function updateProfile(Request $request, $alumni_id) {

        if($request->hasFile('user_profile')) {
            $alumni = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
            foreach($alumni as $image) {
                if(!($image->user_profile) == null) {
                    unlink("Uploads/Profiles/".$image->user_profile);
                }
            }


            $file = $request->file('user_profile');
            $extension = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move('Uploads/Profiles/', $fileName);
            $account = Alumni::where('alumni_id', '=', $alumni_id)->update([
                'user_profile' => $fileName,
            ]);
        }

        $account = Alumni::where('alumni_id', '=', $alumni_id)->update([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'suffix' => $request->input('suffix'),
            'course_id' => $request->input('course_id'),
            'batch' => $request->input('batch'),
            'gender' => $request->input('gender'),
            'birthday' => $request->input('birthday'),
            'age' => $request->input('age'),
            'religion' => $request->input('religion'),
            'civil_status' => $request->input('civil_status'),
            'stud_number' => $request->input('stud_number'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'city_address' => $request->input('city_address'),
            'provincial_address' => $request->input('provincial_address'),
        ]);

        if($account) {
            return back()
                   ->with(
                        'success',
                        'Thank you for posting. Kindly wait for the admin to Approve your Job Posting.'
                    );
        }
        // elseif(Session()->get('loginAdminID')) {
        //     return redirect(route('admin.careerIndex'));
        // }
        else {
            return back()
                   ->with(
                        'fail',
                        'There is an Error Occured'
                    );
        }
        // return redirect(route('userProfile.index'));
    }
}
