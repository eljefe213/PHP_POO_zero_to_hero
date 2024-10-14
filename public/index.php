<?php

use Class\OfficeReservation;

require_once '../vendor/autoload.php';

$officeReservation = new OfficeReservation('Réservation pour le mois de Janvier');
$officeReservation = new OfficeReservation('Réservation pour le mois de Janvier');
$officeReservation = new OfficeReservation('Réservation pour le mois de Janvier');
$officeReservation = new OfficeReservation('Réservation pour le mois de Janvier');

var_dump($officeReservation::$count);
