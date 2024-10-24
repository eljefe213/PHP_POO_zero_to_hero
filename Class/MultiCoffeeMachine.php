<?php 

namespace AppClass;

use AppClass\CoffeeMaker;
use AppClass\Traits\IrishCoffeeTrait;
use AppClass\Traits\EspressoCoffeeTrait;

class MultiCoffeeMachine extends CoffeeMaker 
{
    use IrishCoffeeTrait;
    use EspressoCoffeeTrait;
    
}