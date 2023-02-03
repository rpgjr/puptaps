<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\TemporaryPassword;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginMailController extends Controller
{
    public function sendTemporaryPassword($email, $stud_number) {
        $name = "Rodrigo";

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_#$!';
        $pass = array();
        $charslen = strlen($chars) - 1;

        for ($ctr = 0; $ctr < 8; $ctr++) {
            $temp = rand(0, $charslen);
            $pass[] = $chars[$temp];
        }

        $password = implode($pass);

        $user = User::where('username', '=', $stud_number)->update([
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $userProfile = Alumni::where('stud_number', '=', $stud_number)->update([
            'email' => $email,
        ]);


        Mail::to($email)->send(new TemporaryPassword($stud_number, $email, $password));

        return redirect(route('login'));
    }
}
