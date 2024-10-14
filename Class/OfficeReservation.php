<?php

namespace Class;

class OfficeReservation
{
    private const APPROVAL_PENDING = 'en attente';
    public const APPROVAL_ACCEPTED = 'accepté';
    public const APPROVAL_REJECTED = 'refusé';

    public function __construct()
    {
        echo self::APPROVAL_PENDING;
    }
}
