<?php

namespace App\Providers;

use App\Models\Brand;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        //
       $brands=Brand::latest()->take(7)->get();
        view()->share('brands',$brands);
    }
}
