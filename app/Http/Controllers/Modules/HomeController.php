<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUserHomepage()
    {
        return view('user.homepage');
    }

    public function getLandingPage() {
        return view('landingPage');
    }

    public function getAdminHomepage() {
        return  view('admin.homepage');
    }
}
