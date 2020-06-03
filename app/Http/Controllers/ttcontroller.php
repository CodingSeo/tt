<?php

namespace App\Http\Controllers;

use App\Http\Requests\testrequest;
use App\Service\TestService;

class ttcontroller extends Controller
{
    private $request;
    private $test;
    public function __construct(testrequest $request, TestService $test){
        $this->request = $request;
        $this->test = $test;
    }
    public function index(){
        // return $this->test->test();
        return var_dump($this->request);
    }

    public function test(){
        return $this->test->test();
    }
}
