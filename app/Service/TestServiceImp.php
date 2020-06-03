<?php
namespace App\Service;
use App\Service\TestService;

class TestServiceImp implements TestService{
    public function test(){
        return 'test';
    }
}
