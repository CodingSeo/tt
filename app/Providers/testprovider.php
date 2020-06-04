<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\TestService;
use App\Service\TestServiceImp;

use App\Http\Controllers\testcontroller;
use App\Http\Controllers\ttcontroller;

use App\Http\Requests\APIrequest;
use App\Http\Requests\APIrequestImp;
use App\Http\Requests\APIrequestImpWithAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        $request = $container->request;
        $route_name =  $request->getMethod() . $request->getRequestUri();
        switch ($route_name) {
            case "GET/index":
                $container->bind(APIrequest::class, APIrequestImp::class);
                break;
            case 'POST/test':
                $container->bind(APIrequest::class, APIrequestImp::class);
                break;
            case 'POST/auth':
                $container->bind(APIrequest::class, APIrequestImpWithAuth::class);
                break;
            default:
                $container->bind(APIrequest::class, APIrequestImpWithAuth::class);
                break;
        }

        // $container->bind(APIrequest::class, APIrequestImp::class);
        $container->when(ttcontroller::class)->needs(TestService::class)->give(TestServiceImp::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
