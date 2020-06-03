<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\TestService;
use App\Service\TestServiceImp;

use App\Http\Controllers\testcontroller;
use App\Http\Controllers\ttcontroller;
use Illuminate\Container\Container;

use App\Http\Requests\testrequest;
use App\Http\Requests\testre;



class testprovider extends ServiceProvider
{
    // public $bindings = [
    //     TestService::class => TestServiceImp::class,
    // ];
    /**
     * Register services.
     * @return void
     *
     */

    public function register()
    {
        $container = $this->app;


        // $this->app->bind('App\Service\TestService',
        //     'App\Service\TestServiceImp');

        // $container->when(ttcontroller::class)
        //     ->needs('App\Service\TestService')
        //     ->give(TestServiceImp::class);
        // $container->when(ttcontroller::class)
        //     ->needs(TestService::class)
        //     ->give(TestServiceImp::class);


        // $container->bind(testrequest::class,
        //     testre::class);

        $container->when(ttcontroller::class)
            ->needs(testrequest::class)
            ->give(testre::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    public function provides(){
        return[ttcontroller::class];
    }
}
