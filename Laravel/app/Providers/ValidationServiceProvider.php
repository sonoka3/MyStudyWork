<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class ValidationServiceProvider extends ServiceProvider
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
        Validator::extend('no_space', function ($attribute, $value, $parameters, $validator) {
            return !preg_match('/\s/', $value);
        });
        Validator::extend('unique_image_hash', function ($attribute, $value, $parameters, $validator) {
            $imageHash = md5_file($value->getPathname());
            return !DB::table('web_services')->where('file_hash', $imageHash)->exists();
        });
    }
}
