<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class FormPDFController extends Controller
{
    public function downloadPDS() {
        $userPDS = DB::table('form_pds')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();

        $pdf = PDF::loadView('user.forms.downloadPDS', array('userPDS' => $userPDS), array('users' => $users))->setPaper('letter', 'portrait');

        return $pdf->stream();
    }

    public function downloadSAS() {
        $userSAS = DB::table('form_sas')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();

        $pdf = PDF::loadView('user.forms.downloadSAS', array('userSAS' => $userSAS), array('users' => $users))->setPaper('letter', 'portrait');

        return $pdf->stream();
    }

    public function downloadEI() {
        $userEI = DB::table('form_exit_interview')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $reasons = DB::table('form_exit_interview')->where('alumni_ID', '=', Auth::user()->alumni_ID)->pluck('reason')->toArray();

        $pdf = PDF::loadView('user.forms.downloadEI', array('userEI' => $userEI), array('users' => $users),)->setPaper('letter', 'portrait');

        return $pdf->stream();
    }
}
