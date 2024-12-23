<?php

use App\Core\Router;
use App\Controllers\{GeneralController, CustomerController, AuthController, AdminController};


// General
Router::add('GET', '/', GeneralController::class, 'index');


// Auth
Router::add('GET', '/login', AuthController::class, 'viewLoginPage');
Router::add('POST', '/login', AuthController::class, 'processLogin');
Router::add('POST', '/logout', AuthController::class,'logout');


// Customer
Router::add('GET', '/produk', CustomerController::class, 'viewProduct');
Router::add('GET', '/produk/detail/([0-9a-zA-Z\-]+)', CustomerController::class, 'viewDetailProduct');
Router::add('GET', '/pesan', CustomerController::class, 'viewCustomerOrder');
Router::add('POST', '/pesan', CustomerController::class, 'processCustomerOrder');
Router::add('GET', '/panduan-pemesanan', CustomerController::class, 'viewOrderInstructions');
Router::add('GET', '/tentang', CustomerController::class, 'viewAboutUs');
Router::add('GET', '/kontak', CustomerController::class, 'viewContact');


// Admin
Router::add('GET', '/dashboard', AdminController::class, 'viewDashboard');
Router::add('GET', '/kelola-pesanan', AdminController::class, 'viewKelolaPesananPage');
Router::add('GET', '/katalog-produk', AdminController::class, 'viewKelolaKatalogProduk');
Router::add('GET', '/katalog-produk/tambah', AdminController::class, 'viewTambahProduk');
Router::add('GET', '/ulasan', AdminController::class, 'viewUlasan');
Router::add('GET', '/penjualan', AdminController::class, 'viewManageSales');
