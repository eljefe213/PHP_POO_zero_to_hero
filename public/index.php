<?php

require '../vendor/autoload.php';


$espresso = new AppClass\EspressoMachine();
$irishCoffee = new AppClass\IrishCoffeeMachine();

var_dump(
    $espresso->makeEspresso(),
    $irishCoffee->makeIrishCoffee(),
    $espresso->makeCoffee(),
    $irishCoffee->makeCoffee()
);