<?php

namespace App\Http\Controllers;

use App\Http\Requests\testrequest;
use App\Service\TestService;

class ttcontroller extends Controller
{
    private $test;
    public function __construct(TestService $test){
        $this->test = $test;
    }
    public function index(){
        return $this->test->test();

    }

    public function test(APIrequest $request){
        return var_dump($request);
        // return 'test';
    }

    public function testpost(APIrequest $request){
        return var_dump($request);
        // return 'test';
    }

}
