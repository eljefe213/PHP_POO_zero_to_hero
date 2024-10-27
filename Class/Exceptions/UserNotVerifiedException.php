<?php

namespace AppClass\Exceptions;

class UserNotVerifiedException extends \Exception
{
    protected $message = 'User is not verified';
}
