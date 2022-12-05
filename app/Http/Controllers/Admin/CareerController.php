<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Careers;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function getCareerRequest() {
        $careers = Careers::all();
        $users = Alumni::all();
        $title = "Posting Approval";
        return view('admin.careers.career-approval', compact(['careers', 'users', 'title']));
    }

    public function approveCareer($career_id) {
        $career = Careers::where('career_id', '=', $career_id)->update(['approval' => 1]);

        return redirect(route('adminCareer.getCareerRequest'));
    }

    public function rejectCareer($career_id) {
        $career = Careers::where('career_id', '=', $career_id)->first();
        $career->delete();

        return redirect(route('adminCareer.getCareerRequest'));
    }
}
