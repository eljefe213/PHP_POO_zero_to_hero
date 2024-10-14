<?php

use Class\OfficeReservation;

require '../vendor/autoload.php';

// $status = 'en attente';

// if ($status === Reservation::APPROVAL_PENDING) {
//     echo 'en attente !';
// }

$reservation = new OfficeReservation();

var_dump($reservation);
