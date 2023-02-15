<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function getAdminHomepage() {
        $boardExam = Alumni::join('tbl_tracer_answers', 'tbl_alumni.alumni_id', '=', 'tbl_tracer_answers.alumni_id')
                ->where('tbl_tracer_answers.question_id', '=', 3)
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
            return [$item ->answers => $item->alumniCount];
        });

        $title = "Dashboard";
        return  view('admin.homepage', compact(["perBoardExam", "perCivilService"]));
    }
}
