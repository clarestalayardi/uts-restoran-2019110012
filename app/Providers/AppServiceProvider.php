<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;

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
        Request::macro('isCurrentRoute', function ($routeNames) {
            $bool = false;
            foreach (is_array($routeNames) ? $routeNames : explode(",", $routeNames) as $name) {
                if (request()->routeIs($name)) {
                    $bool = true;
                    break;
                }
            }

            return $bool;
        });
    }
}
