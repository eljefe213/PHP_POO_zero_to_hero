<?php 

namespace AppClass;

class Login 
{
    public function __construct(protected User $user) {}

    public function login() 
    {
        if (!$this->user->isVerified()) {
            throw new \Exception('User not verified');
        }

        return true;
    }
}