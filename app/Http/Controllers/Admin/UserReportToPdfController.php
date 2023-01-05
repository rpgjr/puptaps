<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class UserReportToPdfController extends Controller
{
    public function getUserReportPdf() {
        $pdf = PDF::loadView("admin.reports.user-report-pdf");

        return $pdf->stream("sample.pdf");
    }
}
