<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Courses;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $courses = Courses::all();
        return view('auth.register', compact('courses'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $check_studNumber = Alumni::where('stud_number', '=', $request->stud_number)->first();

        if($check_studNumber) {
            $request->validate([
                'stud_number'   => ['required'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:tbl_alumni']
            ],
            [
                'stud_number.required'  => 'Student Number is required',
                'email.required'        => 'Email is required',
            ]);

            // event(new Registered($user));
            // Auth::login($user);

            $hasPassword = User::where('username', '=', $request->stud_number)->first();
            $email = $request->email;
            $stud_number = $request->stud_number;

            if ($hasPassword['password'] == 'Not Set') {
                return redirect(route('mail.sendTemporaryPassword', [$email, $stud_number]));
            }
            else {
                return redirect(route('landingPage'));
            }
            // return redirect(route('login'));
            // return redirect(RouteServiceProvider::HOME);
        }
        else {
            return back()->with('fail', 'You are not allowed to create an Account yet. Contact the Administrator for more information. Thank you.');
        }
    }
}
