<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function getProfileIndex() {
        $courses = Courses::all();
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.profile.index', compact(['courses', 'users']));
    }

    public function updateProfile(Request $request, $alumni_ID) {

        if($request->hasFile('userProfile')) {
            $alumni = DB::table('tbl_alumni')->where('alumni_ID', '=', $alumni_ID)->get();
            foreach($alumni as $image) {
                if(!($image->userProfile) == null) {
                    unlink("Uploads/Profiles/".$image->userProfile);
                }
            }


            $file = $request->file('userProfile');
            $extension = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move('Uploads/Profiles/', $fileName);
            $account = DB::table('tbl_alumni')->where('alumni_ID', '=', $alumni_ID)->update([
                'userProfile' => $fileName,
            ]);
        }

        $account = DB::table('tbl_alumni')->where('alumni_ID', '=', $alumni_ID)->update([
            'lastName' => $request->input('lastName'),
            'firstName' => $request->input('firstName'),
            'middleName' => $request->input('middleName'),
            'suffix' => $request->input('suffix'),
            'courseID' => $request->input('courseID'),
            'batch' => $request->input('batch'),
            'semesters' => $request->input('semesters'),
            'gender' => $request->input('gender'),
            'bday' => $request->input('bday'),
            'age' => $request->input('age'),
            'religion' => $request->input('religion'),
            'civilStatus' => $request->input('civilStatus'),
            'studNumber' => $request->input('studNumber'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'cityAddress' => $request->input('cityAddress'),
            'provincialAddress' => $request->input('provincialAddress'),
        ]);

        return redirect(route('userProfile.index'));
    }
}
