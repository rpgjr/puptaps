<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    //
    public function getCareerIndex() {
        return view('user.career.index');
    }

    public function addTextCareer(Request $request) {
        $this->validate($request,[
            'userID' => 'required',
            'job_name' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'category' => 'required',
            'email' => 'required',
            'number' => 'required',
            'approval' => 'required',
        ]);

        $career = new Careers();
        $career->userID = $request->input('userID');
        $career->job_name = $request->input('job_name');
        $career->company = $request->input('company');
        $career->salary = $request->input('salary');
        $career->description = $request->input('description');
        $career->category = $request->input('category');
        $career->email = $request->input('email');
        $career->number = $request->input('number');
        $career->approval = $request->input('approval');

        $career->save();

        if(Auth::check()) {
            return back()->with('success', 'Wait for the admin to Approve your Job Posting. Thank you.');
        }
        // elseif(Session()->get('loginAdminID')) {
        //     return redirect(route('admin.careerIndex'));
        // }
        else {
            return back()->with('fail', 'There is an Error Occured');
        }
    }

    public function addImageCareer(Request $request) {
        $request->validate([
            'job_ad_image' => 'required|mimes:jpg,jpeg,png',
        ]);

        $career = new Careers();
        $career->userID = $request->input('userID');
        $career->approval = $request->input('approval');

        if($request->hasFile('job_ad_image')) {
            $file = $request->file('job_ad_image');
            $extension = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move('Uploads/Career/', $fileName);

            $career->job_ad_image = $fileName;

        }

        $career->save();

        if(Auth::check()) {
            return back()->with('success', 'Wait for the admin to Approve your Job Posting. Thank you.');
        }
        // elseif(Session()->get('loginAdminID')) {
        //     return redirect(route('admin.careerIndex'));
        // }
        else {
            return back()->with('fail', 'There is an Error Occured');
        }
    }
}
