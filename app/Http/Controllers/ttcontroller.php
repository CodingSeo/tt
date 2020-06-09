<?php

namespace App\Http\Controllers;

use App\Exceptions\test;
use App\Http\Requests\APIrequest;
use App\Service\TestService;
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
        throw new test('test');
    }

    public function test(APIrequest $request)
    {
        return $request . Route::currentRouteName();
    }

    public function auth(APIrequest $request)
    {
        return $request . Route::currentRouteName();
    }
}
