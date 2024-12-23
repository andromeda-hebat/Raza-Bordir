<?php

require_once __DIR__ . '/../app/routes/web.php';

use App\Core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_set_cookie_params([
    'httponly' => true,
    'samesite' => 'Strict',
    'lifetime' => 3600,
]);
session_start();
session_regenerate_id(true);

Router::initialize();
Router::run();
