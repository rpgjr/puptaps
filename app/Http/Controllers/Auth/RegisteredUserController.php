<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
            'studNumber' => ['required', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'number' => ['required', 'unique:users'],
            'cityAddress' => ['required'],
            'username' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'accessType' => ['required'],
        ]);

        $user = new User();
        $user->lastName = $request->lastName;
        $user->firstName = $request->firstName;
        $user->middleName = $request->middleName;
        $user->suffix = $request->suffix;
        $user->courseID = $request->courseID;
        $user->batch = $request->batch;
        $user->gender = $request->gender;
        $user->bday = $request->bday;
        $user->age = $request->age;
        $user->religion = $request->religion;
        $user->studNumber = $request->studNumber;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->cityAddress = $request->cityAddress;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->accessType = $request->accessType;
        $user->save();

        event(new Registered($user));

        // return redirect(route('user.login'));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
