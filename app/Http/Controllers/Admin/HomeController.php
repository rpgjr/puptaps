<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Alumni;
use App\Models\Careers;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $employed_count = 0;
    public function getAdminHomepage() {
        $boardExam = Alumni::join('tbl_tracer_answers', 'tbl_alumni.alumni_id', '=', 'tbl_tracer_answers.alumni_id')
                ->where('tbl_tracer_answers.question_id', '=', 3)
                ->where('tbl_tracer_answers.answer', '!=', 'N/A')
                ->select('tbl_tracer_answers.answer as answers', DB::raw('count(tbl_alumni.alumni_id) as alumniCount'))
                ->groupBy('answers')
                ->get();
        $perBoardExam = $boardExam->mapWithKeys(function ($item, $key) {
            return [$item ->answers => $item->alumniCount];
        });

        $civilService = Alumni::join('tbl_tracer_answers', 'tbl_alumni.alumni_id', '=', 'tbl_tracer_answers.alumni_id')
                ->where('tbl_tracer_answers.question_id', '=', 5)
                ->select('tbl_tracer_answers.answer as answers', DB::raw('count(tbl_alumni.alumni_id) as alumniCount'))
                ->groupBy('answers')
                ->get();
        $perCivilService = $civilService->mapWithKeys(function ($item, $key) {
            if ($item->answers == "Yes") {
                return ["PASSERS" => $item->alumniCount];
            }
            else {
                return ["NON-PASSERS" => $item->alumniCount];
            }
        });

        $employment = Alumni::join('tbl_tracer_answers', 'tbl_alumni.alumni_id', '=', 'tbl_tracer_answers.alumni_id')
                ->where('tbl_tracer_answers.question_id', '=', 6)
                ->select('tbl_tracer_answers.answer as answers', DB::raw('count(tbl_alumni.alumni_id) as alumniCount'))
                ->groupBy('answers')
                ->get();

        $employedAlumni = $employment->mapWithKeys(function ($item, $key) {
            if ($item->answers != "UNEMPLOYED") {
                return ["EMPLOYED" => $this->employed_count = $item->alumniCount + $this->employed_count];
            }
            else {
                return [$item->answers => $item->alumniCount];
            }
            // return [$item ->answers => $item->alumniCount];

        });

        $career = Careers::orderBy('created_at', 'desc')->first();
        $users              = Alumni::where('alumni_id', '=', Auth::user()
                              ->alumni_id)->get();
        $alumni             = Alumni::all();
        $admin              = Admin::all();
        $username           = User::all();

        $title = "Dashboard";
        return  view('admin.homepage', compact(["perBoardExam", "perCivilService", "employedAlumni", "career", 'users', 'alumni', 'admin', 'username']));
    }
}
