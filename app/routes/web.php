<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/Home.php';

use App\Core\Router;
use App\Controllers\{Home};


Router::add('GET', '/', Home::class, 'index');
