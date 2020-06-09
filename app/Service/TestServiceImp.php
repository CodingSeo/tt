<?php
namespace App\Service;
use App\Service\TestService;

class TestServiceImp implements TestService{
    private $entity;
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
