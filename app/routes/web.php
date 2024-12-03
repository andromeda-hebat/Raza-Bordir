<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{Home};


Router::add('GET', '/', Home::class, 'index');
