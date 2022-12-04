<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

const CONTROLLER_CAREER = 'App\Http\Controllers\Modules\CareerController';
const CONTROLLER_PROFILE = 'App\Http\Controllers\Modules\ProfileController';
const CONTROLLER_TRACER= 'App\Http\Controllers\Modules\TracerController';

const CONTROLLER_FORMS = 'App\Http\Controllers\Modules\FormsController';
const CONTROLLER_PDS_TO_PDF = 'App\Http\Controllers\Modules\PdsToPdfController';
const CONTROLLER_EIF_TO_PDF = 'App\Http\Controllers\Modules\EifToPdfController';
const CONTROLLER_SAS_TO_PDF = 'App\Http\Controllers\Modules\SasToPdfController';

const CONTROLLER_ADMIN_USER_MANAGER = 'App\Http\Controllers\Admin\UserManagerController';
const CONTROLLER_ADMIN_CAREER = 'App\Http\Controllers\Admin\CareerController';
const CONTROLLER_ADMIN_REPORTS = "App\Http\Controllers\Admin\ReportsController";

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

// ========== Module Route ==============================================================================================

// Group for Homepage and Landing Page
Route::group(
    [
        'controller' => 'App\Http\Controllers\Modules\HomeController'
    ], function() {

        //App\Http\Controllers\Modules\
        // Route for Landing Page View
        Route::get('/', 'getLandingPage')
            ->middleware('isLoggedIn')
            ->name('landingPage');

        // Route for HomePage View
        Route::get('/home', 'getUserHomepage')
            ->middleware(['auth', 'verified', 'isAdmin'])
            ->name('user.homepage');

        Route::get('/admin', 'getAdminHomepage')
            ->middleware(['auth', 'isLoggedIn', 'isUser'])
            ->name('admin.homepage');
});

Route::group(
    [
        'middleware' => 'auth',
        'prefix' => 'email',
        'as' => 'verification.'
    ], function() {

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
// ========== End of Module Route =======================================================================================



// ========== User Route =================================================================================================

// User - Career
Route::group(
    [
        'controller' => CONTROLLER_CAREER,
        'prefix' => 'career',
        'as' => 'userCareer.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::get('index', 'getCareerIndex')
            ->name('index');

        Route::post('add/text-career', 'addTextCareer')
            ->name('addTextCareer');

        Route::post('add/image-career', 'addImageCareer')
            ->name('addImageCareer');

        Route::post('application', 'applyCareer')
            ->name('applyCareer');
});

// User - Profile
Route::group(
    [
        'controller' => CONTROLLER_PROFILE,
        'prefix' => 'profile',
        'as' => 'userProfile.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::get('settings', 'getProfileIndex')
            ->name('index');

        Route::patch('settings/update-profile/{alumni_id}', 'updateProfile')
            ->name('updateProfile');
});

// User - Forms
Route::group(
    [
        'controller' => CONTROLLER_FORMS,
        'prefix' => 'form',
        'as' => 'userForm.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::get('index', 'getFormIndex')
            ->name('index');

        Route::get('personal-data-sheet', 'getPDS')
            ->name('getPDS');

        Route::get('exit-interview', 'getExiteInterview')
            ->name('getExiteInterview');

        Route::get('sas', 'getSAS')
            ->name('getSAS');
});

// User - PDS - Download to PDF
Route::group(
    [
        'controller' => CONTROLLER_PDS_TO_PDF,
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::post('PDS_to_PDF', 'PDS_to_PDF')
            ->name('PDS_to_PDF');
});

// User - EIF - Download to PDF
Route::group(
    [
        'controller' => CONTROLLER_EIF_TO_PDF,
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::post('EIF_TO_PDF', 'EIF_TO_PDF')
            ->name('EIF_TO_PDF');
});

// User - SAS - Download to PDF
Route::group(
    [
        'controller' => CONTROLLER_SAS_TO_PDF,
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::post('SAS_TO_PDF', 'SAS_TO_PDF')
            ->name('SAS_TO_PDF');
});

// User - Tracer
Route::group(
    [
        'controller' => CONTROLLER_TRACER,
        'prefix' => 'tracer',
        'as' => 'userTracer.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::get('index', 'getTracerIndex')
            ->name('getTracerIndex');
        Route::get('answer', 'getAnswerPage')
            ->name('getAnswerPage');
        Route::get('update', 'getUpdatePage')
            ->name('getUpdatePage');
});

// ========== End of User Route ======================================================================================



// ========== Admin Route ===========================================================================================

// Admin - User Management
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_USER_MANAGER,
        'prefix' => 'admin/user-management',
        'as' => 'adminUserManagement.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('alumni-manager', 'getAlumniManager')
               ->name('getAlumniManager');

        Route::post('add-alumni-list', 'addAlumniList')
               ->name('addAlumniList');

        Route::post('add-alumni-list', 'addAlumniList')
               ->name('addAlumniList');
});

// Admin - Career Controller
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_CAREER,
        'prefix' => 'admin/career',
        'as' => 'adminCareer.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('requests', 'getCareerRequest')
            ->name('getCareerRequest');

        Route::patch('approve-career/{career_id}', 'approveCareer')
            ->name('approveCareer');
});

// Admin - Reports Controller
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_REPORTS,
        'prefix' => 'admin/reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('reports', 'getFormReports')
               ->name('getFormReports');
});
// ========== End of Route ========================================================================================
