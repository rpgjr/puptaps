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
        $request->validate([
            'lastName' => ['required'],
            'firstName' => ['required'],
            'middleName' => ['required'],
            'courseID' => ['required'],
            'batch' => ['required'],
            'gender' => ['required'],
            'bday' => ['required'],
            'age' => ['required'],
            'religion' => ['required'],
            'studNumber' => ['required', 'unique:tbl_alumni'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tbl_alumni'],
            'number' => ['required', 'unique:tbl_alumni'],
            'cityAddress' => ['required'],
            'username' => ['required', 'unique:tbl_alumni'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_role' => ['required'],
        ]);

        $alumni = new Alumni();
        $alumni->lastName = $request->input('lastName');
        $alumni->firstName = $request->input('firstName');
        $alumni->middleName = $request->input('middleName');
        $alumni->suffix = $request->input('suffix');
        $alumni->courseID = $request->input('courseID');
        $alumni->batch = $request->input('batch');
        $alumni->gender = $request->input('gender');
        $alumni->bday = $request->input('bday');
        $alumni->age = $request->input('age');
        $alumni->religion = $request->input('religion');
        $alumni->studNumber = $request->input('studNumber');
        $alumni->email = $request->input('email');
        $alumni->number = $request->input('number');
        $alumni->semesters = $request->input('semesters');
        $alumni->civilStatus = $request->input('civilStatus');
        $alumni->cityAddress = $request->input('cityAddress');
        $alumni->username = $request->input('username');
        $alumni->password = Hash::make($request->input('password'));
        $alumni->user_role = $request->input('user_role');
        $alumni->save();

        $alumni_to_user = DB::table('tbl_alumni')->where('username', '=', $request->input('username'))->get();
        //$alumni_to_user = Alumni::where('username', '=', $request->username)->get('alumni_ID');

        $user = new User();
        foreach($alumni_to_user as $alumni_info) {
            $user->alumni_ID = $alumni_info->alumni_ID;
            $user->studNumber = $alumni_info->studNumber;
            $user->email = $alumni_info->email;
            $user->username = $alumni_info->username;
            $user->password = $alumni_info->password;
            $user->user_role = $alumni_info->user_role;

            $user->save();
        }



        event(new Registered($user));

        // return redirect(route('user.login'));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
