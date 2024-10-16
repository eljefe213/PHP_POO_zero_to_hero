<?php

use Class\Peugeot;

require '../vendor/autoload.php';

$peugeot = new Peugeot('peugeot');
var_dump($peugeot->rouler(), $peugeot->marque());
