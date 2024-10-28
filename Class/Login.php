<?php

namespace AppClass;

use AppClass\Exceptions\UserNotVerifiedException;
use AppClass\Exceptions\UserIsBannedException;

class Login
{
    public function __construct(protected User $user) {}

    public function login()
    {
        if (!$this->user->isVerified()) {
            throw new UserNotVerifiedException();
        }

        if ($this->user->isBanned()) {
            throw new UserIsBannedException();
        }

        return true;
    }
}
