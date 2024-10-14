<?php

use Class\Reservation;

require '../vendor/autoload.php';

$status = 'en attente';

if ($status === Reservation::APPROVAL_PENDING) {
    echo 'en attente';
}
