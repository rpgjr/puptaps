<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\PDS_questions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class pdsController extends Controller
{
    public function getPDS() {
        return view('user.forms.formPDS');
    }
}
