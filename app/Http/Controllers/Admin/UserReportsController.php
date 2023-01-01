<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use Illuminate\Http\Request;

class UserReportsController extends Controller
{
    public function getUserReports(Request $request) {
        $title = "User Reports";
        $courses = Courses::all();

        $data['course_id']  = $request->get('course_id');
        $data['gender']     = $request->get('gender');
        $data['batch_from'] = $request->get('batch_from');
        $data['batch_to']   = $request->get('batch_to');

        if(
            $data['course_id'] == null &&
            $data['gender'] == null &&
            $data['batch_from'] == null &&
            $data['batch_to'] == null
            ){
                $data['alumni'] = Alumni::orderBy('last_name', 'asc')
                            ->paginate(15)
                            ->withQueryString();
        }
        elseif(($data['gender']) == null) {
            $data['alumni'] = Alumni::where('course_id', 'like', '%' . $data['course_id'] . '%')
                            ->whereBetween('batch', [$data['batch_from'], $data['batch_to']])
                            ->orderBy('last_name', 'asc')
                            ->paginate(15)
                            ->withQueryString();
        }
        else {
            $data['alumni'] = Alumni::where('course_id', 'like', '%' . $data['course_id'] . '%')
                            ->where('gender', "=", $data['gender'])
                            ->whereBetween('batch', [$data['batch_from'], $data['batch_to']])
                            ->orderBy('last_name', 'asc')
                            ->paginate(15)
                            ->withQueryString();
        }

        return view("admin.reports.user-report", compact(["title", "courses"]), $data);
    }
}
