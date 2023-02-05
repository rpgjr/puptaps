<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Alumni;
use App\Models\Careers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    public function getAdminCareerIndex(Request $request) {
        $title = "Career Dashboard";
        $users              = Alumni::where('alumni_id', '=', Auth::user()
                              ->alumni_id)->get();
        $alumni             = Alumni::all();
        $admin              = Admin::all();
        $username           = User::all();
        $data['query']      = $request->get('query');
        $data['careers']    = Careers::where('approval', '=', 1)
                              ->where('category', 'like', '%' . $data['query'] . '%')
                              ->paginate(15)
                              ->withQueryString();

        return view('admin.careers.index', compact(['title', 'users', 'alumni', 'admin', 'username']), $data);
    }

    public function getCareerRequest() {
        $careers = Careers::where("approval", "=", 0)->get();
        $users = Alumni::all();
        $title = "Posting Approval";
        return view('admin.careers.career-approval', compact(['careers', 'users', 'title']));
    }

    public function approveCareer($career_id) {
        $career = Careers::where('career_id', '=', $career_id)->update(['approval' => 1]);

        return back()->with('success', 'Post successfully approved!');
    }

    public function rejectCareer($career_id) {
        $career = Careers::where('career_id', '=', $career_id)->first();
        $career->delete();

        return back()->with('success', 'Post successfully rejected!');
    }

    public function addTextCareer(Request $request) {
        $this->validate($request,[
            'job_name'      => 'required',
            'company'       => 'required',
            'salary'        => 'required',
            'description'   => 'required',
            'category'      => 'required',
            'email'         => 'required',
            'number'        => 'required',
        ]);

        $career = new Careers();
        $career->admin_id   = Auth::user()->admin_id;
        $career->job_name       = $request->input('job_name');
        $career->company        = $request->input('company');
        $career->salary         = $request->input('salary');
        $career->description    = $request->input('description');
        $career->category       = $request->input('category');
        $career->email          = $request->input('email');
        $career->number         = $request->input('number');
        $career->approval   = 1;

        $career->save();

        if($career->save()) {
            return back()
                   ->with(
                        'success',
                        'Thank you for posting.'
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

    public function addImageCareer(Request $request) {
        $request->validate([
            'job_ad_image'  => 'required|mimes:jpg,jpeg,png',
            'category'      => 'required',
        ]);

        $career = new Careers();
        $career->admin_id   = Auth::user()->admin_id;
        $career->approval   = 1;
        $career->category   = $request->input('category');

        if($request->hasFile('job_ad_image')) {

            $file       = $request->file('job_ad_image');
            $extension  = $file->getClientOriginalExtension();
            date_default_timezone_set('Asia/Manila');
            $fileName   = date('m_d_Y [H-i-s]') . '.' . $extension;
            $file->move('Uploads/Career/', $fileName);

            $career->job_ad_image = $fileName;

        }

        $career->save();

        if($career->save()) {
            return back()
                   ->with(
                        'success',
                        'Thank you for posting.'
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
