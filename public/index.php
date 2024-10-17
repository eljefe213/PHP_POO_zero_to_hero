<?php

use Class\Peugeot;
use Class\Renault;

require '../vendor/autoload.php';

$peugeot = new Peugeot('peugeot');
var_dump($peugeot->marque());

$renault = new Renault('renault');
var_dump($renault->marque());
