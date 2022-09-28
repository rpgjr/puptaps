<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormsController extends Controller
{

    public function getFormIndex() {
        $userPDS = DB::table('form_pds')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $userExitInterview = DB::table('form_exit_interview')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $userSAS = DB::table('form_sas')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $pdsResult = true;

        return view('user.forms.index', compact(['users', 'userPDS', 'userExitInterview', 'userSAS']));

        // return view('user.forms.index', compact('pdsResult'));
    }

    public function getPDS() {
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.forms.formPDS', compact(['users']));
    }

    public function getExiteInterview() {
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.forms.formExitInterview', compact(['users']));
    }

    public function getSAS() {
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.forms.formSAS', compact(['users']));
    }
}
