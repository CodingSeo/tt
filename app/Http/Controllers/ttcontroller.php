<?php

namespace App\Http\Controllers;

use App\Http\Requests\testrequest;
u
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

    public function test(APItestrequest $request){
        return var_dump($request);
        // return 'test';
    }

    public function testpost(APItestpostrequest $request){
        return var_dump($request);
        // return 'test';
    }

}
