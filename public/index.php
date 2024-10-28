<?php

use AppClass\User;
use AppClass\Login;
use AppClass\Exceptions\UserNotVerifiedException;

require '../vendor/autoload.php';

$user = new User('admin', 'password');
$login = new Login($user);

try {
    $login->login();
} catch (UserNotVerifiedException $e) {
    echo $e->getMessage() . 'sur la ligne ' . $e->getLine();
}
