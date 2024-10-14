<?php

namespace Class;

class OfficeReservation
{
    public const APPROVAL_PENDING = 'en attente';
    public const APPROVAL_ACCEPTED = 'accepté';
    public const APPROVAL_REJECTED = 'refusé';

    public string $status;

    public function __construct()
    {
        $this->status = self::APPROVAL_PENDING;
    }
}
