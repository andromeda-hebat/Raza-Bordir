<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{CustomerController, AdminController};


Router::add('GET', '/', CustomerController::class, 'index');
Router::add('GET', '/produk', CustomerController::class, 'showProduct');
Router::add('GET', '/produk/detail/([0-9a-zA-Z\-]+)', CustomerController::class, 'showDetailProduct');
Router::add('GET', '/pesan', CustomerController::class, 'clientOrder');
Router::add('GET', '/panduan-pemesanan', CustomerController::class, 'showOrderInstructions');
Router::add('GET', '/formulir-pemesanan', CustomerController::class, 'showOrderForm');
Router::add('POST', '/customer-order', CustomerController::class, '');
Router::add('GET', '/tentang', CustomerController::class, 'showAboutUs');


// Admin
Router::add('GET', '/admin', AdminController::class, 'showLoginPage');
Router::add('POST', '/admin', AdminController::class, 'processLogin');
Router::add('GET', '/dashboard', AdminController::class, 'showDashboard');
Router::add('GET', '/kelola-pesanan', AdminController::class, 'showKelolaPesananPage');
Router::add('GET', '/katalog-produk', AdminController::class, 'showKelolaKatalogProduk');
Router::add('GET', '/ulasan', AdminController::class, 'showUlasan');
Router::add('GET', '/katalog-produk/tambah', AdminController::class, 'showTambahProduk');
