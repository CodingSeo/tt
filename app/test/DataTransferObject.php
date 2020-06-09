<?php
namespace App\test;

use App\Exceptions\LackofInputException;
use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObject
{
    public function __construct(array $parameters = [])
    {
        $class = new ReflectionClass(static::class);
        $errors = array();
        foreach ($class->getProperties(ReflectionProperty::IS_PROTECTED) as $reflectionProperty){
            $property = $reflectionProperty->getName();
            if(array_key_exists($property,$parameters))$this->{$property} = $parameters[$property];
            else{
                array_push($errors,$property);
            }
        }
        if(!empty($errors)){
            throw new LackofInputException($errors);
        }
    }
}
