<?php

namespace Class;

use Class\Enums\OfficeStatus;

class OfficeReservation
{

    public OfficeStatus $status;

    public function __construct()
    {
        $this->status = OfficeStatus::APPROVAL_PENDING;
    }
}
