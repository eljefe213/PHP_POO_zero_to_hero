<?php

use AppClass\User;
use AppClass\Login;
use AppClass\Exceptions\UserNotVerifiedException;
use AppClass\Exceptions\UserIsBannedException;

require '../vendor/autoload.php';

$user = new User('admin', 'password');
$login = new Login($user);

try {
    $login->login();
} catch (UserNotVerifiedException $e) {
    echo $e->getMessage() . 'sur la ligne ' . $e->getLine() . ' du fichier ' . $e->getFile();
} catch (UserIsBannedException $e) {
    echo $e->getMessage() . 'on the line ' . $e->getLine() . ' in the file ' . $e->getFile();
}
