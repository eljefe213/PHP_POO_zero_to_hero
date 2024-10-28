<?php

use AppClass\User;
use AppClass\Login;
use AppClass\Exceptions\UserNotVerifiedException;
use AppClass\Exceptions\UserIsBannedException;
use AppClass\Exceptions\UserException;

require '../vendor/autoload.php';

$user = new User('admin', 'password');
$login = new Login($user);

try {
    $login->login();
} catch (UserException $e) {
    echo $e->getMessage() . ' on the line ' . $e->getLine() . ' in the file ' . $e->getFile();
} finally {
    echo 'Done';
}
