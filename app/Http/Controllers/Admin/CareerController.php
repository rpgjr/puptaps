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
        return view('admin.careers.request', compact(['careers', 'users']));
    }

    public function approveCareer($career_ID) {
        $career = Careers::where('career_ID', '=', $career_ID)->update(['approval' => 1]);

        return redirect(route('adminCareer.getCareerRequest'));
    }
}
