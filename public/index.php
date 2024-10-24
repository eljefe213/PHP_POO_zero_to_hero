<?php

require '../vendor/autoload.php';


$espresso = new AppClass\EspressoMachine();
$irishCoffee = new AppClass\IrishCoffeeMachine();
$multiCoffee = new AppClass\MultiCoffeeMachine();

var_dump(
    $espresso->makeEspresso(),
    $espresso->makeCoffee(),
    $irishCoffee->makeIrishCoffee(),
    $irishCoffee->makeCoffee(),
);