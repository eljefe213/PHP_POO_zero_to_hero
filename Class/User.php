<?php

namespace AppClass;
use AppClass\Traits\Mailable;

class User
{
    use Mailable;
    public function authenticated()
    {
        return 'authenticated';
    }
}