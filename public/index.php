<?php

use Class\CoffeeMachine;
use Class\PremiumCoffeeMachine;

require_once '../vendor/autoload.php';

$coffeeMachine = new PremiumCoffeeMachine(2);

$coffeeMachine->select('vanilla');
