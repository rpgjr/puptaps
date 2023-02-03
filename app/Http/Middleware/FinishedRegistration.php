<?php

namespace App\Http\Middleware;

use App\Models\Alumni;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinishedRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $check_profile = Alumni::where('email', '=', Auth::user()->email)->first();
        if ($check_profile['profile_status'] == 'Incomplete') {
            return redirect(route('userProfile.getProfileSetup'));
        }
        else {
            return back();
        }
        return $next($request);
    }
}
