<?php 

namespace AppClass;

class Login 
{
    public function __construct(protected User $user) {}

    public function login() : bool 
    {
        return true;
    }
}