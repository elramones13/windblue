<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        //URL::forceScheme('https');
        //if (DB::connection() instanceof \Illuminate\Database\SQLiteConnection) {
         //   DB::statement(DB::raw('PRAGMA foreign_keys=1'));
        //}
    }
}
