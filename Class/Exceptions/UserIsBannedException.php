<?php

namespace AppClass\Exceptions;

class UserIsBannedException extends \Exception
{
    protected $message = 'User is banned';
}
