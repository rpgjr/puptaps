<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Forms;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    public function getReportIndex() {
        $title = "Reports Dashboard";
        $forms = Forms::all();

        return view("admin.reports.report-index", compact(["title", "forms"]));
    }

    public function getFormReports() {
        $title = "Form Reports";
        $forms = Forms::all();

        return view("admin.reports.form-index", compact(["title", "forms"]));
    }

    public function getUserReports() {
        $title = "User Reports";

        return view("admin.reports.user-index", compact(["title"]));
    }
}
