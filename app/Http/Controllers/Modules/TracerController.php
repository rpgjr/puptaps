<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerController extends Controller
{
    public function getTracerIndex() {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        return view('user.tracer.index', compact(['users']));
    }
}
