<?php

use Class\OfficeReservation;
use Class\Enums\OfficeStatus;

require '../vendor/autoload.php';


$reservation = new OfficeReservation();

if (OfficeStatus::APPROVAL_PENDING === $reservation->status) {
    echo 'en attente !';
}


var_dump($reservation);
