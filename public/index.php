<?php

use Class\CoffeeMachine;
use Class\PremiumCoffeeMachine;

require_once '../vendor/autoload.php';

$coffeeMachine = new PremiumCoffeeMachine;

$coffeeMachine->select('vanilla');
