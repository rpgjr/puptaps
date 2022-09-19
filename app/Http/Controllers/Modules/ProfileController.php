<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function getProfileIndex() {
        $courses = Courses::all();
        return view('user.profile.index', compact(['courses']));
    }
}
