<?php

require '../vendor/autoload.php';


$espresso = new AppClass\EspressoMachine();
$irishCoffee = new AppClass\IrishCoffeeMachine();
$multiCoffee = new AppClass\MultiCoffeeMachine();

var_dump(
    $multiCoffee->makeEspresso(),
    $multiCoffee->makeCoffee(),
    $multiCoffee->makeIrishCoffee()
);