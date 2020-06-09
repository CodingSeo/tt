<?php
namespace App\test;

use Illuminate\Http\Request;

class test extends DataTransferObject{
    protected $test;
    protected $testes;
    /**
     * Get the value of test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Get the value of testes
     */
    public function getTestes()
    {
        return $this->testes;
    }
}
