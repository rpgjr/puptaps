<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\Tracer\TracerAnswers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerController extends Controller
{
    public function getTracerIndex() {
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $tracer_answers = TracerAnswers::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $title = "Tracer Form";
        $courses = Courses::all();
        return view('user.tracer.index', compact(['users', 'tracer_answers', 'title', 'courses']));
    }

    public function getAnswerPage() {
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $title = "Answer Tracer Form";
        return view('user.tracer.answer', compact(['users', 'title']));
    }

    public function getUpdatePage() {
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $title = "Update Tracer Form";
        return view('user.tracer.update', compact(['users', 'title']));
    }
}
