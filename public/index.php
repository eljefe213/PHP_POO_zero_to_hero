<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Controllers\HomeController;
use Source\app;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->get('/', ['Controllers\HomeController', 'index']);
$router->post('/', ['Controllers\HomeController', 'index']);

(new App($router, [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
]))->run();
