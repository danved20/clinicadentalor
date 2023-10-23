<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('numeros', function ($attribute, $value, $parameters, $validator) {
            return !preg_match('/[0-9]/', $value);
        });
        Validator::extend('validar_numero', function ($attribute, $value, $parameters, $validator) {
            return is_numeric($value) && strlen($value) <= 10;
        });
        Validator::extend('gmail', function ($attribute, $value, $parameters, $validator) {
            return str_ends_with($value, '@gmail.com');
        });
    }
}
