<?php

use App\Core\Router;
use App\Controllers\{GeneralController, CustomerController, AuthController, AdminController, OrderController};


// General
Router::add('GET', '/', GeneralController::class, 'index');
Router::add('GET', '/tentang', GeneralController::class, 'viewAboutUs');
Router::add('GET', '/kontak', GeneralController::class, 'viewContact');
Router::add('GET', '/static/img/(.+)', GeneralController::class, 'serveStaticImgFile');



// Auth
Router::add('GET', '/login', AuthController::class, 'viewLoginPage');
Router::add('POST', '/login', AuthController::class, 'processLogin');
Router::add('POST', '/logout', AuthController::class,'logout');



// Customer
Router::add('GET', '/produk', CustomerController::class, 'viewProduct');
Router::add('GET', '/produk/detail/([0-9a-zA-Z\-]+)', CustomerController::class, 'viewDetailProduct');



// Order
Router::add('GET', '/pesan', OrderController::class, 'viewCustomerOrder');
Router::add('POST', '/pesan', OrderController::class, 'processCustomerOrder');
Router::add('GET', '/cek-pesanan', OrderController::class, 'viewCheckOrder');
Router::add('GET', '/cek-pesanan-process', OrderController::class, 'processCheckOrder');
Router::add('GET', '/panduan-pemesanan', OrderController::class, 'viewOrderInstructions');


// Admin
Router::add('GET', '/dashboard', AdminController::class, 'viewDashboard');
Router::add('GET', '/kelola-pesanan', AdminController::class, 'viewKelolaPesananPage');
Router::add('GET', '/katalog-produk', AdminController::class, 'viewKelolaKatalogProduk');
Router::add('GET', '/katalog-produk/tambah', AdminController::class, 'viewTambahProduk');
Router::add('GET', '/ulasan', AdminController::class, 'viewUlasan');
Router::add('GET', '/penjualan', AdminController::class, 'viewManageSales');
