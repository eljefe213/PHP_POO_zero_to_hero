<?php

use Class\OfficeReservation;

require_once '../vendor/autoload.php';

$officeReservation = new OfficeReservation('Réservation pour le mois de Jnavier');

var_dump($officeReservation);
