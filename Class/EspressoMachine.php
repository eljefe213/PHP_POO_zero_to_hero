<?php 

namespace AppClass;

class EspressoMachine extends CoffeeMaker
{
    public function makeEspresso(): string
    {
        return static::class . ': is Making espresso...';
    }
}

