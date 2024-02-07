<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Dotenv\Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
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
        $validator=$this->app['validator'];
        $validator->resolver(function($translator,$data,$rules,$message){
            return new HelloValidator($translator,$data,$rules,$message);
        });
    }
}
