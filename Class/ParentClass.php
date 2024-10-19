<?php 

namespace AppClass;

class ParentClass
{
    protected string $name = 'ParentClass';

    public function getName(): string
    {
        return $this->name;
    }
}