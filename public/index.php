<?php

require_once __DIR__ . '/../vendor/autoload.php';
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


// i10n
$GLOBALS['date_time_formatter'] = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

Router::initialize();
Router::run();
