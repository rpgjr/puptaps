<?php

use App\Http\Controllers\admin\AccountSettingsController;
use App\Http\Controllers\Admin\AlumniPdfController;
use App\Http\Controllers\Admin\CareerController as AdminCareerController;
use App\Http\Controllers\admin\FormReportsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\admin\TracerReportsController;
use App\Http\Controllers\Admin\UserManagerController;
use App\Http\Controllers\Admin\UserReportsController;
use App\Http\Controllers\Admin\UserReportToPdfController;
use App\Http\Controllers\Auth\LoginMailController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\TemporaryPassoword;
use App\Http\Controllers\Modules\CareerController;
use App\Http\Controllers\Modules\EifToPdfController;
use App\Http\Controllers\Modules\FormsController;
use App\Http\Controllers\modules\HomeController as ModulesHomeController;
use App\Http\Controllers\Modules\PdsToPdfController;
use App\Http\Controllers\Modules\ProfileController;
use App\Http\Controllers\Modules\SasToPdfController;
use App\Http\Controllers\Modules\TracerController;
use App\Http\Controllers\SuperAdmin\AdminManagementController;
use App\Http\Controllers\SuperAdmin\AnnouncementController;
use App\Http\Controllers\SuperAdmin\HomeController as SuperAdminHomeController;
use App\Http\Controllers\SuperAdmin\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
        'controller' => ModulesHomeController::class
    ], function() {

        //App\Http\Controllers\Modules\
        // Route for Landing Page View
        Route::get('/', 'getLandingPage')
            ->middleware('isLoggedIn')
            ->name('landingPage');

        // Route for HomePage View
        Route::get('/home', 'getUserHomepage')
            ->middleware(['auth', 'isAdmin', 'checkAccountStatus', 'hasCompleteProfile', 'hasAnswerTracer'])
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

// Login Mail
Route::group(
    [
        'controller' => LoginMailController::class,
        'prefix' => 'mail',
        'as' => 'mail.',
    ], function() {
        Route::get('sendTemporaryPassword/{email}/{stud_number}', 'sendTemporaryPassword')
            ->name('sendTemporaryPassword');
});

// Temporary Password
Route::group(
    [
        'controller' => TemporaryPassoword::class,
        'prefix' => 'login',
        'as' => 'login.',
    ], function() {
        Route::get('getTemporaryPassword', 'getTemporaryPassword')
            ->name('getTemporaryPassword');
});

// Reset Password
Route::group(
    [
        'controller' => ResetPasswordController::class,
        'prefix' => 'login',
        'as' => 'login.',
    ], function() {
        Route::get('getResetPassword', 'getResetPassword')
            ->name('getResetPassword');

        Route::post('sendResetPassword', 'sendResetPassword')
            ->name('sendResetPassword');

        Route::get('changePassword/{email}', 'changePassword')
            ->name('changePassword');

        Route::post('changingPassword', 'changingPassword')
            ->name('changingPassword');
});

// Login - Registration
require __DIR__.'/auth.php';
// ========== End of Module Route =======================================================================================



// ========== User Route =================================================================================================

// User - Career
Route::group(
    [
        'controller' => CareerController::class,
        'prefix' => 'career',
        'as' => 'userCareer.',
        'middleware' => ['isAdmin', 'auth', 'hasCompleteProfile', 'hasAnswerTracer']
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
        'controller' => ProfileController::class,
        'prefix' => 'profile',
        'as' => 'userProfile.',
        'middleware' => ['isAdmin', 'auth', 'hasAnswerTracer']
    ], function() {
        Route::get('settings', 'getProfileIndex')
            ->name('index')->middleware('hasCompleteProfile');

        Route::get('getProfileSetup', 'getProfileSetup')
            ->name('getProfileSetup')->middleware('hasIncompleteProfile');

        Route::post('setup-profile', 'updateProfile')
            ->name('updateProfile');

        Route::post('updateUserAccount', 'updateUserAccount')
            ->name('updateUserAccount');
});

// User - Forms
Route::group(
    [
        'controller' => FormsController::class,
        'prefix' => 'form',
        'as' => 'userForm.',
        'middleware' => ['isAdmin', 'auth', 'hasCompleteProfile', 'hasAnswerTracer']
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

// PDF Forms - Dompdf
Route::group(
    [
        'controller' => 'App\Http\Controllers\Modules\FormPDFController',
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['isAdmin', 'auth']
    ], function() {
        Route::post('PDS-form', 'downloadPDS')
            ->name('downloadPDS');
        Route::post('SAS-form', 'downloadSAS')
            ->name('downloadSAS');
        Route::post('Exit-Interview-form', 'downloadEI')
            ->name('downloadEI');
});

// User - PDS - Download to PDF
Route::group(
    [
        'controller' => PdsToPdfController::class,
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['auth']
    ], function() {
        Route::post('PDS_to_PDF', 'PDS_to_PDF')
            ->name('PDS_to_PDF');
});

// User - EIF - Download to PDF
Route::group(
    [
        'controller' => EifToPdfController::class,
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['auth']
    ], function() {
        Route::post('EIF_TO_PDF', 'EIF_TO_PDF')
            ->name('EIF_TO_PDF');
});

// User - SAS - Download to PDF
Route::group(
    [
        'controller' => SasToPdfController::class,
        'prefix' => 'downloads',
        'as' => 'userForm.',
        'middleware' => ['auth']
    ], function() {
        Route::post('SAS_TO_PDF', 'SAS_TO_PDF')
            ->name('SAS_TO_PDF');
});

// User - Tracer
Route::group(
    [
        'controller' => TracerController::class,
        'prefix' => 'tracer',
        'as' => 'userTracer.',
        'middleware' => ['isAdmin', 'auth', 'hasCompleteProfile']
    ], function() {
        Route::get('index', 'getTracerIndex')
            ->name('getTracerIndex')->middleware('hasAnswerTracer');
        Route::get('update', 'getUpdatePage')
            ->name('getUpdatePage')->middleware('hasAnswerTracer');
        Route::get('answer', 'getAnswerPage')
            ->name('getAnswerPage')->middleware('hasUnanswerTracer');
        Route::get('getAnswerModal', 'getAnswerModal')
            ->name('getAnswerModal')->middleware('hasUnanswerTracer');
});

// ========== End of User Route ======================================================================================



// ========== Admin Route ===========================================================================================

// Group for Homepage and Landing Page
Route::group(
    [
        'controller' => HomeController::class
    ], function() {

        Route::get('/admin', 'getAdminHomepage')
            ->middleware(['auth', 'isLoggedIn', 'isUser'])
            ->name('admin.homepage');
});

// Admin - User Management
Route::group(
    [
        'controller' => UserManagerController::class,
        'prefix' => 'admin/user-management',
        'as' => 'adminUserManagement.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        // Route::get('alumni-list', 'getAlumniList')
        //        ->name('getAlumniList');

        Route::post('add-alumni-list', 'addAlumniList')
               ->name('addAlumniList');

        Route::get('alumni-manager', 'getAlumniManager')
               ->name('getAlumniManager');

        Route::post('remove-alumni-account', 'removeAlumniAccount')
               ->name('removeAlumniAccount');

        Route::get('download-template', 'downloadListTemplate')
               ->name('downloadListTemplate');
});

// Admin - Get Alumni PDF Form
Route::group(
    [
        'controller' => AlumniPdfController::class,
        'prefix' => 'admin/alumni-pdf',
        'as' => 'adminGetPdf.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::post('pds-pdf', 'downloadPDS')
               ->name('downloadPDS');

        Route::post('eif-pdf', 'downloadEI')
               ->name('downloadEI');

        Route::post('sas-pdf', 'downloadSAS')
               ->name('downloadSAS');
});

// Admin - Career Controller
Route::group(
    [
        'controller' => AdminCareerController::class,
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

        Route::post('reject-career', 'rejectCareer')
            ->name('rejectCareer');

        Route::post('add/text-career', 'addTextCareer')
            ->name('addTextCareer');

        Route::post('add/image-career', 'addImageCareer')
            ->name('addImageCareer');
});

// Admin - Reports Controller
Route::group(
    [
        'controller' => ReportsController::class,
        'prefix' => 'admin/reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('form-reports', 'getFormReports')
               ->name('getFormReports');

        Route::get('tracer-reports', 'getTracerReports')
               ->name('getTracerReports');
});

// Admin - User Reports
Route::group(
    [
        'controller' => UserReportsController::class,
        'prefix' => 'admin/reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::get('user-report', 'getUserReports')
               ->name('getUserReports');

});

// Admin - User Reports
Route::group(
    [
        'controller' => UserReportToPdfController::class,
        'prefix' => 'admin/user-reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::post('alumni-reports', 'getUserReportPdf')
               ->name('getUserReportPdf');

});

// Admin - Tracer Reports
Route::group(
    [
        'controller' => TracerReportsController::class,
        'prefix' => 'admin/tracer-reports',
        'as' => 'adminReports.',
        'middleware' => ['isUser', 'auth']
    ], function() {
        Route::post('tracerReportToPdf', 'tracerReportToPdf')
             ->name('tracerReportToPdf');
});

// Admin - Form Reports and PDF
Route::group(
    [
        'controller' => FormReportsController::class,
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
        'controller' => AccountSettingsController::class,
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
        'controller' => SuperAdminHomeController::class
    ], function() {

        Route::get('/super-admin', 'getSuperAdminIndex')
            ->middleware(['auth', 'isLoggedIn', 'isUser'])
            ->name('superAdmin.getSuperAdminIndex');
});

// Super Admin - Announcement Settings
Route::group(
    [
        'controller' => AnnouncementController::class,
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
        'controller' => NewsController::class,
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
        'controller' => AdminManagementController::class,
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
