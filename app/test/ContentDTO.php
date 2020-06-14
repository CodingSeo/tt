<?php

namespace App\DTO\Content;

use ReflectionClass;
use ReflectionProperty;

abstract class ContentDTO
{
    public function __construct(array $parameters = [])
    {
        $class = new ReflectionClass(static::class);
        foreach ($class->getProperties(ReflectionProperty::IS_PROTECTED) as $reflectionProperty) {
            $type = $reflectionProperty->getType();
            $property = $reflectionProperty->getName();
            if(array_key_exists($property,$parameters))$this->{$property} = $parameters[$property];
        }
    }
}
