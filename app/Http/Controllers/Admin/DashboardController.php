<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getAdminHomepage() {
        $registeredUser = Alumni::select('course_id', DB::raw('count(alumni_id) as id'))->groupBy('course_id')->get();
        $totalRegisteredUser = $registeredUser->mapWithKeys(function ($item, $key) {
            return [$item ->course_id => $item->id];
        });

        $listOfNewAccounts = DB::table("tbl_alumni")->orderBy("alumni_id", "desc")->take(5)->get();

        $list = Alumni::where("batch", "=", date("Y"))->get();
        $listOfStudents = $list->sortBy("course_id");
        $totalStudents = count($listOfStudents);

        $title = "Dashboard";
        return  view('admin.homepage', compact(["title", "totalRegisteredUser", "totalStudents", "listOfNewAccounts"]));
    }
}
