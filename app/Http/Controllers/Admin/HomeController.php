<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getAdminHomepage() {
        $registeredUser = Alumni::select('course_id', DB::raw('count(alumni_id) as id'))->groupBy('course_id')->get();
        // $totalRegisteredUser = $registeredUser->mapWithKeys(function ($item, $key) {
        //     return [$item ->course_id => $item->id];
        // });
        $totalRegisteredUser[] = ["Course", "Number of Students"];
        foreach($registeredUser as $key => $value) {
            $totalRegisteredUser[++$key] = [$value->course_id, $value->id];
        }

        $totalregisteredUserSex[] = ["Course", "Number of Students"];
        $registeredUserSex = Alumni::select('sex', DB::raw('count(alumni_id) as id'))->groupBy('sex')->get();
        foreach($registeredUserSex as $key => $value) {
            $totalregisteredUserSex[++$key] = [$value->sex, $value->id];
        }
        // dd($totalRegisteredUser2);

        $listOfNewAccounts = DB::table("tbl_alumni")->orderBy("alumni_id", "desc")->take(5)->get();

        $list = Alumni::all();
        $listOfStudents = $list->sortBy("course_id");
        $totalStudents = count($listOfStudents);

        $title = "Dashboard";
        return  view('admin.homepage', compact(["title", "totalStudents", "listOfNewAccounts"]))->with('totalRegisteredUser', json_encode($totalRegisteredUser))->with('totalregisteredUserSex', json_encode($totalregisteredUserSex));
    }
}
