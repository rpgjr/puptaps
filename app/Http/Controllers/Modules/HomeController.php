<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getUserHomepage()
    {
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.homepage', compact('users'));
    }

    public function getLandingPage() {
        return view('landingPage');
    }

    public function getAdminHomepage() {
        return  view('admin.homepage');
    }
}
