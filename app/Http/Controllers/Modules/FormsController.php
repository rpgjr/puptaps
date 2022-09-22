<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\PDS_answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormsController extends Controller
{
    public function getFormIndex() {
        $userPDS = DB::table('form_pds_answers')->where('alumni_ID', '=', Auth::user()->alumni_ID);
        return view('user.forms.index', compact('userPDS'));
    }
}
