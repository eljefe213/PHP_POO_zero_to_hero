<?php

use AppClass\User;
use AppClass\Login;

require '../vendor/autoload.php';

$user = new User('admin', 'password');
$login = new Login($user);

var_dump($login->login());