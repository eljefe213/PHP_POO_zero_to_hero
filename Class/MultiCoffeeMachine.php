<?php 

namespace AppClass;

use AppClass\CoffeeMaker;
use AppClass\Contracts\EspressoCoffeeInterface;
use AppClass\Contracts\IrishCoffeeInterface;

class MultiCoffeeMachine extends CoffeeMaker 
{
    public function makeIrishCoffee(): string
    {
        return static::class . ': is Making Irish coffee...';
    }

    public function makeEspresso(): string
    {
        return static::class . ': is Making Espresso...';
    }
    
}