<?php 

namespace AppClass;

use AppClass\Contracts\EspressoCoffeeInterface;

class EspressoMachine extends CoffeeMaker implements EspressoCoffeeInterface
{
    public function makeEspresso(): string
    {
        return static::class . ': is Making espresso...';
    }
}

