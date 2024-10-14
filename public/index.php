<?php

use Class\CoffeeMachine;
use Class\PremiumCoffeeMachine;

require_once '../vendor/autoload.php';

$coffeeMachine = new CoffeeMachine(1);
$coffeeMachine->select('qahwa hlib');
