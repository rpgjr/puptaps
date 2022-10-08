<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\FormExitInterview;
use App\Models\FormPDS;
use App\Models\FormSAS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class FormPDFController extends Controller
{
    public function downloadPDS() {
        $userPDS = FormPDS::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();

        $pdf = PDF::loadView('user.forms.downloadPDS', array('userPDS' => $userPDS), array('users' => $users))->setPaper('letter', 'portrait');

        return $pdf->stream();
    }

    public function downloadSAS() {
        $userSAS = FormSAS::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();

        $pdf = PDF::loadView('user.forms.downloadSAS', array('userSAS' => $userSAS), array('users' => $users))->setPaper('letter', 'portrait');

        return $pdf->stream();
    }

    public function downloadEI() {
        $userEI = FormExitInterview::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();

        $pdf = PDF::loadView('user.forms.downloadEI', array('userEI' => $userEI), array('users' => $users),)->setPaper('letter', 'portrait');

        return $pdf->stream();
    }
}
