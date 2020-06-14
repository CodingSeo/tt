<?php

namespace App\test;

use App\Exceptions\LackofInputException;
use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObjectWithValidation
{
    public function __construct(array $parameters = [])
    {
        $class = new ReflectionClass(static::class);
        foreach ($class->getProperties(ReflectionProperty::IS_PROTECTED) as $reflectionProperty) {
            $type = $this->getTypeNameFromAnnotation($reflectionProperty);
            $property = $reflectionProperty->getName();
            if($this->isSimpleType($type));
            if($this->isFlatType($type));
            if(array_key_exists($property, $parameters)) $this->{$property} = $parameters[$property];
        }
    }
    private function getTypeNameFromAnnotation($rp)
    {
        if (preg_match('/@var\s+([^\s]+)/', $rp->getDocComment(), $matches)) {
            return $matches[1];
        }
        return null;
    }
    private function isSimpleType($type)
    {
        return $type == 'string'
            || $type == 'boolean' || $type == 'bool'
            || $type == 'integer' || $type == 'int'
            || $type == 'double' || $type == 'float'
            || $type == 'array' || $type == 'object';
    }
    private function isFlatType($type)
    {
        return $type == 'NULL'
            || $type == 'string'
            || $type == 'boolean' || $type == 'bool'
            || $type == 'integer' || $type == 'int'
            || $type == 'double' || $type == 'float';
    }
}
