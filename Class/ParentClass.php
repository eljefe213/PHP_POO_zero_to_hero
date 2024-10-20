<?php 

namespace AppClass;

class ParentClass
{
    protected static string $name = 'ParentClass';

    public static function getName(): string
    {
        // return $this->name;
        return static::$name;
    }
}