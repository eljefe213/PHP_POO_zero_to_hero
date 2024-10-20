<?php

namespace AppClass;

abstract class CoffeeMaker
{
    public function makeCoffee(): string
    {
        return static::class . ': is Making coffee...';
    }
}