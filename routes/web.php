<?php

use Illuminate\Support\Facades\Route;

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

// Landing Page and Authentication Module for USERS
Route::group(['middleware' => 'isLoggedIn'], function() {

    //App\Http\Controllers\Modules\
    // Route for Landing Page View
    Route::get('/', ['as' => 'landingPage', 'uses' => 'App\Http\Controllers\Modules\LandingController@landingPage']);

    //Route for Login Page
    Route::get('/user/login', ['as' => 'user.login', 'uses' => 'App\Http\Controllers\Modules\LandingController@userLoginView']);

    //Route for Registration Page

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ========== End of Module Route ==========



// ========== User Route ==========

// ========== End of User Route ==========



// ========== Admin Route ==========

// ========== End of Route ==========
