<?php

namespace Class;

class Reservation
{
    private const APPROVAL_PENDING = 'en attente';
    public const APPROVAL_ACCEPTED = 'accepté';
    public const APPROVAL_REJECTED = 'refusé';

    public function __construct()
    {
        echo Reservation::APPROVAL_PENDING;
    }
}
