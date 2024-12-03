<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;


Router::add('GET', '/', HomeController::class, 'index');
