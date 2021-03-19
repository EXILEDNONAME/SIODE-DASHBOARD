<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider {

    public function register() {
        //
    }

    public function boot() {
      Schema::defaultStringLength(191);
      config(['app.locale' => 'en']);
      Carbon::setLocale('en');
      date_default_timezone_set('Asia/Jakarta');
    }

}
