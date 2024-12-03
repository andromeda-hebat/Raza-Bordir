<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{HomeController, AdminController};


Router::add('GET', '/', HomeController::class, 'index');

// Admin
Router::add('GET', '/admin', AdminController::class, 'showLoginPage');
Router::add('POST', '/admin', AdminController::class, 'processLogin');
Router::add('GET', '/dashboard', AdminController::class, 'showDashboard');
Router::add('GET', '/kelola-pesanan', AdminController::class, 'showKelolaPesananPage');
Router::add('GET', '/kelola-katalog', AdminController::class, 'showKelolaKatalogProduk');
Router::add('GET', '/ulasan', AdminController::class, 'showUlasan');
