<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\TestService;

class testcontroller extends Controller
{
    private $request;
    private $test;
    public function __construct(Request $request, TestService $test){
        $this->request = $request;
        $this->test = $test;
    }
    public function index(){
        return $this->test->test();
    }

    public function test(){
        return $this->test->test();
    }
}
