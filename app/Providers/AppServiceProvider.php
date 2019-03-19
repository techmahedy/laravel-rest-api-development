<?php

namespace App\Providers;

//use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        //Resource::withoutWrapping(); //For getting data like api not like json data
    }
}
