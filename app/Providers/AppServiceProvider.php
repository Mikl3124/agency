<?php

namespace App\Providers;

use App\Setting;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }

        if (!app()->runningInConsole()) {
            $categories = Category::take(5)->get();
            View::share('categories', $categories);

            $setting = Setting::first();
            View::share('setting', $setting);
        }

        Carbon::setLocale(config('app.locale'));
    }
}
