<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function getCareerRequest() {
        $careers = Careers::all();
        $users = Alumni::all();
        return view('admin.careers.request', compact(['careers', 'users']));
    }

    public function approveCareer($careerID) {
        $career = DB::table('tbl_careers')->where('careerID', '=', $careerID)->update(['approval' => 1]);

        return redirect(route('adminCareer.getCareerRequest'));
    }
}
