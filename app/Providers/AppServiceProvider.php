<?php

namespace App\Providers;

use App\Models\Alumni;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        // view()->share('users', $users);
        Paginator::useBootstrap();
    }
}
