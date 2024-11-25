<?php

namespace App\Providers;

use App\Models\Setting;
use App\Services\SettingService;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SettingService::class, function () {
            return new SettingService;
        });

        $this->app->when(UserController::class)
        ->needs('$apiKey')
        ->give(env('API_KEY'));




    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
