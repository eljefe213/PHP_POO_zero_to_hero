<?php

namespace AppClass;

abstract class CoffeeMaker
{
    public function makeCoffee()
    {
        return static::class . ': is Making coffee...';
    }
}