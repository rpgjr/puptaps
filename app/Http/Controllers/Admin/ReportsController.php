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
        $title = "Form Reports";
        $forms = Forms::all();

        return view("admin.reports.form-index", compact(["title", "forms"]));
    }

    public function getTracerReports() {
        return view("admin.reports.tracer-index");
    }
}
