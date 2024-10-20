<?php 

namespace AppClass;

class IrishCoffeeMachine extends CoffeeMaker
{
    public function makeIrishCoffee(): string
    {
        return static::class . ': is Making Irish coffee...';
    }
}

