<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{CustomerController, AuthController, AdminController};


Router::add('GET', '/', CustomerController::class, 'index');
Router::add('GET', '/produk', CustomerController::class, 'showProduct');
Router::add('GET', '/produk/detail/([0-9a-zA-Z\-]+)', CustomerController::class, 'showDetailProduct');
Router::add('GET', '/pesan', CustomerController::class, 'clientOrder');
Router::add('GET', '/panduan-pemesanan', CustomerController::class, 'showOrderInstructions');
Router::add('GET', '/formulir-pemesanan', CustomerController::class, 'showOrderForm');
Router::add('POST', '/customer-order', CustomerController::class, '');
Router::add('GET', '/tentang', CustomerController::class, 'showAboutUs');
Router::add('GET', '/kontak', CustomerController::class, 'showContact');


// Admin
Router::add('GET', '/admin', AuthController::class, 'showLoginPage');
Router::add('POST', '/admin', AuthController::class, 'processLogin');
Router::add('GET', '/dashboard', AdminController::class, 'showDashboard');
Router::add('GET', '/kelola-pesanan', AdminController::class, 'showKelolaPesananPage');
Router::add('GET', '/katalog-produk', AdminController::class, 'showKelolaKatalogProduk');
Router::add('GET', '/katalog-produk/tambah', AdminController::class, 'showTambahProduk');
Router::add('GET', '/ulasan', AdminController::class, 'showUlasan');
Router::add('GET', '/penjualan', AdminController::class, 'manageSales');
