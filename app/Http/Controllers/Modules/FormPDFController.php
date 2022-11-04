<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Forms\Eif\EifAnswers;
use App\Models\Forms\Pds\PdsAnswers;
use App\Models\Forms\Pds\PdsCategories;
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
        $data = [
            'users'           => $users,
            'formQuestions'   => $formQuestions,
            'userAnswers'     => $userAnswers,
        ];

        $pdf = PDF::loadView(
                                'user.forms.downloadPDS',
                                $data,
                            )->setPaper('letter', 'portrait');

        // $pdf = PDF::loadView(
        //                         'user.forms.downloadPDS',
        //                         array('users'           => $users),
        //                         array('formCategories'  => $formCategories),
        //                         array('formQuestions'   => $formQuestions),
        //                         array('userAnswers'      => $userAnswers),
        //                     )->setPaper('letter', 'portrait');
        return $pdf->stream();
    }

    public function downloadSAS() {
        $getUserAnswer = SasAnswers::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();

        $pdf = PDF::loadView('user.forms.downloadSAS', array('getUserAnswer' => $getUserAnswer), array('users' => $users))->setPaper('letter', 'portrait');

        return $pdf->stream();
    }

    public function downloadEI() {
        $getUserAnswer = EifAnswers::where('alumni_id', '=', Auth::user()->alumni_id)->get();
        $users = Alumni::where('alumni_id', '=', Auth::user()->alumni_id)->get();

        $pdf = PDF::loadView('user.forms.downloadEI', array('getUserAnswer' => $getUserAnswer), array('users' => $users),)->setPaper('letter', 'portrait');

        return $pdf->stream();
    }
}
