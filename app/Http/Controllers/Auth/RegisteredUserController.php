<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\AlumniList;
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
        $check_studNumber   = AlumniList::where('stud_number', '=', $request->stud_number)->first();
        $check_lastName     = AlumniList::where('last_name', '=', $request->last_name)->first();
        $check_course       = AlumniList::where('course_id', '=', $request->course_id)->first();

        if($check_studNumber && $check_lastName && $check_course) {
            $request->validate([
                'last_name'     => ['required'],
                'first_name'    => ['required'],
                'middle_name'   => ['required'],

                'course_id'     => ['required'],
                'batch'         => ['required'],
                'stud_number'   => ['required', 'unique:tbl_alumni'],

                'email'         => ['required', 'string', 'email', 'max:255', 'unique:tbl_alumni'],
                'number'        => ['required', 'unique:tbl_alumni'],
                'username'      => ['required', 'unique:tbl_alumni'],
                'password'      => ['required', 'confirmed', Rules\Password::defaults()],
                'user_role'     => ['required'],
            ],
            [
                'last_name.required'    => 'Last Name is required',
                'first_name.required'   => 'First Name is required',
                'middle_name.required'  => 'Middle Name is required',

                'course_id.required'    => 'Course is required',
                'batch.required'        => 'Year Graduated is required',
                'stud_number.required'  => 'Student Number is required',

                'email.required'        => 'Email is required',
                'number.required'       => 'Number is required',
                'username.required'     => 'Username is required',
                'password.required'     => 'Password is required',
            ]);

            $alumni = new Alumni();
            $alumni->last_name      = $request->input('last_name');
            $alumni->first_name     = $request->input('first_name');
            $alumni->middle_name    = $request->input('middle_name');
            $alumni->suffix         = $request->input('suffix');

            $alumni->course_id      = $request->input('course_id');
            $alumni->batch          = $request->input('batch');
            $alumni->stud_number    = $request->input('stud_number');

            $alumni->email          = $request->input('email');
            $alumni->number         = $request->input('number');
            $alumni->username       = $request->input('username');
            $alumni->password       = Hash::make($request->input('password'));
            $alumni->user_role      = $request->input('user_role');
            $alumni->save();

            $alumni_to_user = DB::table('tbl_alumni')->where('username', '=', $request->input('username'))->get();
            $user = new User();
            foreach($alumni_to_user as $alumni_info) {
                $user->alumni_id    = $alumni_info->alumni_id;
                $user->stud_number  = $alumni_info->stud_number;
                $user->email        = $alumni_info->email;
                $user->username     = $alumni_info->username;
                $user->password     = $alumni_info->password;
                $user->user_role    = $alumni_info->user_role;

                $user->save();
            }

            event(new Registered($user));
            Auth::login($user);
            return redirect(route('login'));
            // return redirect(RouteServiceProvider::HOME);
        }
        else {
            return back()->with('fail', 'You are not allowed to create an Account yet. Contact the Administrator for more information. Thank you.');
        }
    }
}
