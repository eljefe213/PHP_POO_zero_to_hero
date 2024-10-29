<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Controllers\HomeController;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->register('/', ['Controllers\HomeController', 'index']);

$router->register('/contact', function () {
    return 'Contact page';
});

try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}
