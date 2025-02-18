<?php

use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/finalproject/public/', HomeController::class, 'login');

$router->dispatch();