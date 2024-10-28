<?php

namespace AppClass;

class User
{
    public function __construct(public string $username, public string $password) {}

    public function isVerified(): bool
    {
        return false;
    }

    public function isBanned(): bool
    {
        return true;
    }
}
