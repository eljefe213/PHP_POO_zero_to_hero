<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Controllers\HomeController;
use Source\app;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->register('/', ['Controllers\HomeController', 'index']);

(new App($router, $_SERVER['REQUEST_URI']))->run();
