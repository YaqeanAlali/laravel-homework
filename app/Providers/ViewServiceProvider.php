<?php

namespace App\Providers;
use App\Models\Cat;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        view()->composer("front.include.header", function ($view) {
            $view->with("cats", Cat::select("id", "name")->get());
            $view->with("sett", Setting::select("logo", "favicon")->first());
        });
        view()->composer("front.include.footer", function ($view) {
            $view->with("sett", Setting::first());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
