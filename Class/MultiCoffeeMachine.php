<?php 

namespace AppClass;

use AppClass\CoffeeMaker;
use AppClass\Traits\IrishCoffeeTrait;

class MultiCoffeeMachine extends CoffeeMaker 
{
    use IrishCoffeeTrait;

    public function makeEspresso(): string
    {
        return static::class . ': is Making Espresso...';
    }
    
}