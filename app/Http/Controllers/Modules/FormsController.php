<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\FormExitInterview;
use App\Models\FormPDS;
use App\Models\FormSAS;
use Illuminate\Support\Facades\Auth;

class FormsController extends Controller
{

    public function getFormIndex() {

        $userPDS = FormPDS::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $userSAS = FormSAS::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $userExitInterview = FormExitInterview::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        $pdsResult = true;

        return view('user.forms.index', compact(['users', 'userPDS', 'userExitInterview', 'userSAS']));

        // return view('user.forms.index', compact('pdsResult'));
    }

    public function getPDS() {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.forms.formPDS', compact(['users']));
    }

    public function getExiteInterview() {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.forms.formExitInterview', compact(['users']));
    }

    public function getSAS() {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.forms.formSAS', compact(['users']));
    }
}
