<?php 

namespace AppClass\Traits;

trait IrishCoffeeTrait
{
    public function makeIrishCoffee(): string
    {
        return static::class . ': is Making Irish coffee...';
    }
}