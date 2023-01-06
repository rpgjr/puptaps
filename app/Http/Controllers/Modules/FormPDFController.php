<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\Forms\Eif\EifAnswers;
use App\Models\Forms\Eif\EifQuestions;
use App\Models\Forms\Pds\PdsAnswers;
use App\Models\Forms\Pds\PdsQuestions;
use App\Models\Forms\Sas\SasAnswers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class FormPDFController extends Controller
{
    public function downloadPDS() {
        $formQuestions  = PdsQuestions::all();
        $userAnswers    = PdsAnswers::where('alumni_id', '=', Auth::user()->alumni_id)
                          ->get();
        $users          = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)
                          ->get();
        $courses        = Courses::all();
        $data = [
            'users'           => $users,
            'formQuestions'   => $formQuestions,
            'userAnswers'     => $userAnswers,
            'courses'         => $courses,
        ];

        $pdf = PDF::loadView(
                                'user.forms.downloadPDS',
                                $data,
                            )->setPaper('letter', 'portrait');
        return $pdf->stream();
    }

    public function downloadSAS() {
        $formQuestions  = EifQuestions::all();
        $userAnswers    = EifAnswers::where('alumni_id', '=', Auth::user()->alumni_id)
                          ->get();
        $users          = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)
                          ->get();
        $courses        = Courses::all();
        $data = [
            'users'           => $users,
            'formQuestions'   => $formQuestions,
            'userAnswers'     => $userAnswers,
            'courses'         => $courses,
        ];

        $pdf = PDF::loadView(
                                'user.forms.downloadEIF',
                                $data,
                            )->setPaper('letter', 'portrait');
        return $pdf->stream();
    }

    public function downloadEI() {
        $formQuestions  = EifQuestions::all();
        $userAnswers    = EifAnswers::where('alumni_id', '=', Auth::user()->alumni_id)
                          ->get();
        $users          = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)
                          ->get();
        $courses        = Courses::all();
        $data = [
            'users'           => $users,
            'formQuestions'   => $formQuestions,
            'userAnswers'     => $userAnswers,
            'courses'         => $courses,
        ];

        $pdf = PDF::loadView(
                                'user.forms.downloadEI',
                                $data,
                            )->setPaper('letter', 'portrait');
        return $pdf->stream();
    }
}
