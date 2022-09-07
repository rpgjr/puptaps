<?php

/*
Controller Name: Landing Page Controller
Module: Landing Page Module

Purpose of this File:
    *Returns the view for navigation [Login, Registration, Landing Page]
*/

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Return the Landing Page View
    public function landingPage() {
        return view('landingPage');
    }

    // Return Login Page View for Users
    public function userLoginView() {
        return view('auth.login');
    }
}
