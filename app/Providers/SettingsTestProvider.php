<?php

namespace App\Providers;

use Illuminate\Support\Facades;
use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;

class SettingsTestProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // share data with all views
        $settings = [
            'name' => 'Company name',
            'address' => 'Company address',
        ];
        Facades\View::share('settings', $settings);

        // share data with specific view
        Facades\View::composer('welcome', function (View $view) {
            return $view->with('myName', 'Mahmoud');
        });
    }
}
