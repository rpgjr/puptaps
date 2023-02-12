<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\Forms;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function getFormReports() {
        $forms = Forms::all();
        $courses = Courses::all();

        return view("admin.reports.form-index", compact(["forms", "courses"]));
    }

    public function getTracerReports() {
        return view("admin.reports.tracer-index");
    }
}
