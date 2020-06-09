<?php

namespace App\Http\Controllers;


use App\Http\Requests\APIrequest;
use App\Service\TestService;
use App\test\test;
use Illuminate\Support\Facades\Route;

class ttcontroller extends Controller
{
    private $test;
    public function __construct(TestService $test)
    {
        $this->test = $test;
    }
    public function index()
    {
    }

    public function test(APIrequest $request)
    {
        $tt = new test($request->all());
        dd($tt);
        return $request . Route::currentRouteName();
    }

    public function auth(APIrequest $request)
    {
        return $request . Route::currentRouteName();
    }
}
