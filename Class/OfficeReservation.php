<?php

namespace Class;

class OfficeReservation
{
    private static int $count = 0;

    public function __construct(public string $information) {}

    public static function getCount(): int
    {
        return self::$count;
    }
}
