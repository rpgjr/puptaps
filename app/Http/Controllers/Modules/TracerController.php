<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Tracer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerController extends Controller
{
    public function getTracerIndex() {
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $tracer_answers = Tracer::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        return view('user.tracer.index', compact(['users', 'tracer_answers']));
    }

    public function getAnswerPage() {
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        return view('user.tracer.answer', compact(['users']));
    }
}