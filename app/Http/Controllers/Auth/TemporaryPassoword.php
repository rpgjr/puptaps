<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemporaryPassoword extends Controller
{
    public function getTemporaryPassword() {
        return view('auth.temporary-password');
    }
}
