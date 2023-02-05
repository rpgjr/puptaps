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
    public function getUserHomepage(Request $request)
    {
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();

        $data['query'] = $request->get('query');

        if ($data['query'] == 'Announcements') {
            $data['announcements'] = Announcements::all();
            $data['news'] = [];
        }

        elseif ($data['query'] == 'News') {
            $data['news'] = News::all();
            $data['announcements'] = [];
        }

        elseif ($data['query'] == 'All') {
            $data['announcements'] = Announcements::all();
            $data['news'] = News::all();
        }
        elseif ($data['query'] == null) {
            $data['query'] = "All";
            $data['announcements'] = Announcements::all();
            $data['news'] = News::all();
        }
        return view('user.homepage', compact(["users"]), $data);
    }

    public function getLandingPage() {
        return view('landingPage');
    }
}
