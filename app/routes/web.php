<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\{CustomerController, AuthController, AdminController};


Router::add('GET', '/', CustomerController::class, 'index');
Router::add('GET', '/produk', CustomerController::class, 'viewProduct');
Router::add('GET', '/produk/detail/([0-9a-zA-Z\-]+)', CustomerController::class, 'viewDetailProduct');
Router::add('GET', '/pesan', CustomerController::class, 'viewCustomerOrder');
Router::add('GET', '/panduan-pemesanan', CustomerController::class, 'viewOrderInstructions');
Router::add('GET', '/formulir-pemesanan', CustomerController::class, 'viewOrderForm');
Router::add('POST', '/customer-order', CustomerController::class, '');
Router::add('GET', '/tentang', CustomerController::class, 'viewAboutUs');
Router::add('GET', '/kontak', CustomerController::class, 'viewContact');


// Admin
Router::add('GET', '/admin', AuthController::class, 'viewLoginPage');
Router::add('POST', '/admin', AuthController::class, 'processLogin');
Router::add('GET', '/dashboard', AdminController::class, 'viewDashboard');
Router::add('GET', '/kelola-pesanan', AdminController::class, 'viewKelolaPesananPage');
Router::add('GET', '/katalog-produk', AdminController::class, 'viewKelolaKatalogProduk');
Router::add('GET', '/katalog-produk/tambah', AdminController::class, 'viewTambahProduk');
Router::add('GET', '/ulasan', AdminController::class, 'viewUlasan');
Router::add('GET', '/penjualan', AdminController::class, 'viewManageSales');
