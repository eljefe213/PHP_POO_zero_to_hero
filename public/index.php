<?php

use Router\Router;

require '../vendor/autoload.php';

$router = new Router();

$router->register('/', function () {
    return 'Home page';
});

$router->register('/contact', function () {
    return 'Contact page';
});

echo '<pre>';
var_dump($router);
echo '</pre>';
