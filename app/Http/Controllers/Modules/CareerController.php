<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\CareerApplicant;
use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    //
    public function getCareerIndex(Request $request) {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $alumni = Alumni::all();
        $applicants = CareerApplicant::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $posts = Alumni::all();
        $data['query'] = $request->get('query');
        $data['careers'] = Careers::where('approval', '=', 1)->where('category', 'like', '%' . $data['query'] . '%')->paginate(15)->withQueryString();
        return view('user.career.index', compact(['users', 'applicants', 'posts', 'alumni']), $data);
    }

    public function addTextCareer(Request $request) {
        $this->validate($request,[
            'alumni_ID' => 'required',
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
        $career->alumni_ID = $request->input('alumni_ID');
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
            'category' => 'required',
        ]);

        $career = new Careers();
        $career->alumni_ID = $request->input('alumni_ID');
        $career->approval = $request->input('approval');
        $career->category = $request->input('category');

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

    public function applyCareer(Request $request) {
        $applicant = new CareerApplicant();

        $applicant->alumni_ID = $request->alumni_ID;
        $applicant->course_ID = $request->course_ID;

        $applicant->save();

        return back()->with('success', 'Thank you for applying. Hope you get the Job!!!');
    }
}
