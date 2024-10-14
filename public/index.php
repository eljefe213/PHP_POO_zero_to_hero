<?php

use Class\OfficeReservation;
use Class\Enums\OfficeStatus;

require '../vendor/autoload.php';

// $status = 'en attente';

// if ($status === Reservation::APPROVAL_PENDING) {
//     echo 'en attente !';
// }

// $reservation = new OfficeReservation();

// var_dump($reservation);

var_dump(OfficeStatus::APPROVAL_PENDING);
