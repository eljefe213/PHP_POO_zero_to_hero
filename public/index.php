<?php

use Class\CoffeeMachine;

require_once '../vendor/autoload.php';

$coffeeMachine = new CoffeeMachine;
$coffeeMachine->select('espresso');
