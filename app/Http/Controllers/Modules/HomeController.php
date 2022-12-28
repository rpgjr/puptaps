<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Announcements;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getUserHomepage()
    {
        $announcements = Announcements::all();
        $news = News::all();
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        return view('user.homepage', compact(["users", "announcements", "news"]));
    }

    public function getLandingPage() {
        return view('landingPage');
    }
}
