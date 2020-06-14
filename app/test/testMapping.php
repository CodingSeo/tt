<?php
namespace App\test;

class testMapping implements testM{
    public $test;
    public $testes;
    /**
     * Set the value of test
     *
     * @return  self
     */
    public function setTest(int $test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Set the value of testes
     *
     * @return  self
     */
    public function setTestes(int $testes)
    {
        $this->testes = $testes;

        return $this;
    }
}
