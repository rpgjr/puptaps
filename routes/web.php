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
const CONTROLLER_ADMIN_USER_REPORTS = "App\Http\Controllers\Admin\UserReportsController";
const CONTROLLER_ADMIN_FORM_REPORTS = "App\Http\Controllers\Admin\FormReportsController";

const CONTROLLER_ADMIN_ACCOUNT_SETTINGS = "App\Http\Controllers\Admin\AccountSettingsController";

const CONTROLLER_SUPERADMIN_ANNOUNCEMENT_SETTINGS = "App\Http\Controllers\SuperAdmin\AnnouncementController";
const CONTROLLER_SUPERADMIN_NEWS_SETTINGS = "App\Http\Controllers\SuperAdmin\NewsController";
const CONTROLLER_SUPERADMIN_ADMIN_MANAGEMENT = "App\Http\Controllers\SuperAdmin\AdminManagementController";

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

// Group for Homepage and Landing Page
Route::group(
    [
        'controller' => 'App\Http\Controllers\Admin\HomeController'
    ], function() {

        Route::get('/admin', 'getAdminHomepage')
            ->middleware(['auth', 'isLoggedIn', 'isUser'])
            ->name('admin.homepage');
});

// Admin - User Management
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_USER_MANAGER,
        'prefix' => 'admin/user-management',
        'as' => 'adminUserManagement.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('alumni-list', 'getAlumniList')
               ->name('getAlumniList');

        Route::post('add-alumni-list', 'addAlumniList')
               ->name('addAlumniList');

        Route::get('alumni-manager', 'getAlumniManager')
               ->name('getAlumniManager');

        Route::post('remove-alumni-account', 'removeAlumniAccount')
               ->name('removeAlumniAccount');
});

// Admin - Career Controller
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_CAREER,
        'prefix' => 'admin/career',
        'as' => 'adminCareer.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('career-dashboard', 'getAdminCareerIndex')
            ->name('getAdminCareerIndex');

        Route::get('requests', 'getCareerRequest')
            ->name('getCareerRequest');

        Route::patch('approve-career/{career_id}', 'approveCareer')
            ->name('approveCareer');

        Route::delete('reject-career/{career_id}', 'rejectCareer')
            ->name('rejectCareer');

        Route::post('add/text-career', 'addTextCareer')
            ->name('addTextCareer');

        Route::post('add/image-career', 'addImageCareer')
            ->name('addImageCareer');
});

// Admin - Reports Controller
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_REPORTS,
        'prefix' => 'admin/reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('form-reports', 'getFormReports')
               ->name('getFormReports');

        Route::get('tracer-reports', 'getTracerReports')
               ->name('getTracerReports');
});

// Admin - User Reports and PDF
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_USER_REPORTS,
        'prefix' => 'admin/reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('user-report', 'getUserReports')
               ->name('getUserReports');

});

// Admin - Form Reports and PDF
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_FORM_REPORTS,
        'prefix' => 'admin/reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::post('generated-form-report', 'generateFormReport')
               ->name('generateFormReport');

        // Route::post('user-pdf-report', 'USER_REPORT_PDF')
        //        ->name('USER_REPORT_PDF');

        // Route::post('user-pdf-report/download', 'DOWNLOAD_USER_REPORT_PDF')
        //        ->name('DOWNLOAD_USER_REPORT_PDF');

});

// Admin - Account Settings
Route::group(
    [
        'controller' => CONTROLLER_ADMIN_ACCOUNT_SETTINGS,
        'prefix' => 'admin/settings',
        'as' => 'adminSettings.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('account', 'getAccountSettings')
               ->name('getAccountSettings');

        Route::post('account/update', 'updateAccount')
               ->name('updateAccount');

});
// ========== End of Route ========================================================================================

// ====== Super Admin Route ===========================================================================================

// Group for Homepage and Landing Page
Route::group(
    [
        'controller' => 'App\Http\Controllers\SuperAdmin\HomeController'
    ], function() {

        Route::get('/super-admin', 'getSuperAdminIndex')
            ->middleware(['auth', 'isLoggedIn', 'isUser'])
            ->name('superAdmin.getSuperAdminIndex');
});

// Super Admin - Announcement Settings
Route::group(
    [
        'controller' => CONTROLLER_SUPERADMIN_ANNOUNCEMENT_SETTINGS,
        'prefix' => 'super-admin/news-events',
        'as' => 'superAdmin.',
        'middleware' => ['isUser', 'auth']
    ], function() {

        Route::get('announcement', 'getAnnouncementSettings')
               ->name('getAnnouncementSettings');

        Route::post('add-announcement', 'postAnnouncement')
               ->name('postAnnouncement');

        Route::post('delete-announcement', 'deleteAnnouncement')
               ->name('deleteAnnouncement');
});

// Super Admin - News Settings
Route::group(
    [
        'controller' => CONTROLLER_SUPERADMIN_NEWS_SETTINGS,
        'prefix' => 'super-admin/news-events',
        'as' => 'superAdmin.',
        'middleware' => ['isUser', 'auth']
    ], function() {

        Route::get('news', 'getNewsSettings')
               ->name('getNewsSettings');

        Route::post('add-news', 'postNews')
               ->name('postNews');

        Route::post('delete-news', 'deleteNews')
               ->name('deleteNews');
});

// Super Admin - News Settings
Route::group(
    [
        'controller' => CONTROLLER_SUPERADMIN_ADMIN_MANAGEMENT,
        'prefix' => 'super-admin/admin-management',
        'as' => 'superAdmin.',
        'middleware' => ['isUser', 'auth']
    ], function() {

        Route::get('add-admin', 'getAddNewAdmin')
               ->name('getAddNewAdmin');

        Route::post('save-admin', 'saveNewAdmin')
               ->name('saveNewAdmin');

        Route::get('admin-manager', 'getAdminManager')
               ->name('getAdminManager');

        Route::post('delete-admin', 'deleteAdmin')
               ->name('deleteAdmin');
});
// ====== Super Admin Route ===========================================================================================
