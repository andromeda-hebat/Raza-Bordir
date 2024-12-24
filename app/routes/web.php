<?php

use App\Core\Router;
use App\Controllers\{GeneralController, CustomerController, AuthController, AdminController, OrderController};


// General
Router::add('GET', '/', GeneralController::class, 'index');
Router::add('GET', '/tentang', GeneralController::class, 'viewAboutUs');
Router::add('GET', '/kontak', GeneralController::class, 'viewContact');
Router::add('GET', '/static/img/(.+)', GeneralController::class, 'serveStaticImgFile');
Router::add('GET', '/static/img-design/(.+)', GeneralController::class, 'serveStaticDesignFile');



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
Router::add('GET', '/kelola-pesanan', AdminController::class, 'viewManageOrders');
Router::add('GET', '/kelola-pesanan/detail/([0-9]+)', AdminController::class, 'viewDetailOrder');
Router::add('GET', '/katalog-produk', AdminController::class, 'viewManageProductCatalog');
Router::add('GET', '/katalog-produk/tambah', AdminController::class, 'viewAddProduct');
Router::add('POST', '/katalog-produk/tambah', AdminController::class, 'processAddProduct');
Router::add('POST', '/katalog-produk/([0-9]+)', AdminController::class, 'processEditProduct'); // NOTE: Change this temporary HTTP request method to PUT or PATCH
Router::add('DELETE', '/katalog-produk', AdminController::class, 'processDeleteProduct');
Router::add('GET', '/ulasan', AdminController::class, 'viewUlasan');
Router::add('GET', '/penjualan', AdminController::class, 'viewManageSales');
