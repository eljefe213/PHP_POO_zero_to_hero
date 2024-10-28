<?php

namespace AppClass\Exceptions;

class UserException extends \Exception
{

    public static function notVerified(): static
    {
        return new static('User is not verified yet');
    }
}
