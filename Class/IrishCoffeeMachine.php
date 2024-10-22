<?php 

namespace AppClass;

use AppClass\Contracts\IrishCoffeeInterface;

class IrishCoffeeMachine extends CoffeeMaker implements IrishCoffeeInterface
{
    public function makeIrishCoffee(): string
    {
        return static::class . ': is Making Irish coffee...';
    }
}

