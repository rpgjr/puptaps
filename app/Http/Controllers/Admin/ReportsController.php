<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function getFormReports() {
        $title = "Form Reports";
        return view("admin.reports.index", compact(["title"]));
    }
}
