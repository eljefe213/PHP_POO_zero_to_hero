<?php

use Class\Peugeot;
use Class\Vehicule;

require '../vendor/autoload.php';

$peugeot = new Peugeot('peugeot');
var_dump( $peugeot->marque());

