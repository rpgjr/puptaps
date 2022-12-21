<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $alumni = DB::table('tbl_alumni')->where('email', '=', $request->input('email'))->get();
        foreach ($alumni as $alumni_update)
        {
            if(($alumni_update->email_verified_at) == null && Auth::check()) {
                $update_alumni_table = DB::table('tbl_alumni')->where('alumni_id', '=', Auth::user()->alumni_id)->update([
                    'email_verified_at' => Auth::user()->email_verified_at,
                ]);
            }
        }

        if((Auth::user()->user_role) == 'Alumni') {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        elseif((Auth::user()->user_role) == 'Admin') {
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        elseif((Auth::user()->user_role) == 'Super_Admin') {
            return redirect()->intended(RouteServiceProvider::SUPERADMIN);
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('landingPage'));
    }
}
