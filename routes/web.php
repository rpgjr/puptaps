<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\modules\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ========== Module Route ==========

// Group for Homepage and Landing Page
Route::group(['controller' => 'App\Http\Controllers\Modules\HomeController'], function() {

    //App\Http\Controllers\Modules\
    // Route for Landing Page View
    Route::get('/', 'getLandingPage')->middleware('isLoggedIn')->name('landingPage');

    // Route for HomePage View
    Route::get('/home', 'getUserHomepage')->middleware(['auth', 'verified', 'isLoggedIn'])->name('user.homepage');

    Route::get('/admin', 'getAdminHomepage')->name('admin.homepage');
});

Route::group(['middleware' => 'auth', 'prefix' => 'email', 'as' => 'verification.'], function() {
    // After Registration Email Verification
    Route::get('verify', function () {
        return view('auth.verify-email');
    })->name('notice');

    //User verified using email
    Route::get('verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware(['signed'])->name('verify');

    //Resending of Email Verification
    Route::post('verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('send');
});

// Login - Registration
require __DIR__.'/auth.php';

Route::group(['controller' => 'App\Http\Controllers\Auth\AdminAuthController', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('login', 'getAdminLogin')->name('getLogin');
    Route::post('loginAdmin', 'adminLogin')->name('login');
});
// ========== End of Module Route ==========



// ========== User Route ==========

// ========== End of User Route ==========



// ========== Admin Route ==========

// ========== End of Route ==========
