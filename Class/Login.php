<?php 

namespace AppClass;

use AppClass\Exceptions\UserNotVerifiedException;

class Login 
{
    public function __construct(protected User $user) {}

    public function login() 
    {
        if (!$this->user->isVerified()) {
            throw new UserNotVerifiedException('User not verified');
        }

        return true;
    }
}