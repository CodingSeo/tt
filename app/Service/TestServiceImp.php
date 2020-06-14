<?php
namespace App\Service;
use App\Service\TestService;
use App\test\testM;

class TestServiceImp implements TestService{
    private $entity;
    private $t;
    public function __construct(testM $e)
    {
        $this->t = $e;
    }
    public function map($model)
    {
        $this->entity =  (object) $model->toArray();
    }
    public function __get($name)
    {
        if (array_key_exists($name, (array) $this->entity)) {
            return $this->entity[$name];
        } else return null;
    }
}
