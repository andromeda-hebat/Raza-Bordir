<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\OrderRepository;

class AdminController extends Controller
{
    public function viewDashboard(): void
    {
        $this->view("templates/header", [
            'title'=>"Dashboard"
        ]);
        $this->view("pages/admin/dashboard");
        $this->view("templates/footer");
    }

    public function viewMangeOrders(): void
    {
        try {
            $orders = OrderRepository::getAllOrders();
        } catch (\PDOException   $e) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }

        $this->view("templates/header", [
            'title'=>"Kelola Pesanan"
        ]);
        $this->view("pages/admin/kelola_pesanan", [
            'orders' => $orders
        ]);
        $this->view("templates/footer");
    }

    public function viewKelolaKatalogProduk(): void
    {
        $this->view("templates/header", [
            'title'=>"Kelola Katalog Produk"
        ]);
        $this->view("pages/admin/kelola_katalog_produk");
        $this->view("templates/footer");
    }

    public function viewUlasan(): void
    {
        $this->view("templates/header", [
            'title'=>"Ulasan"
        ]);
        $this->view("pages/admin/ulasan");
        $this->view("templates/footer");
    }

    public function viewTambahProduk(): void
    {
        $this->view("templates/header", [
            'title'=>"Tambah Produk"
        ]);
        $this->view("pages/admin/tambah_produk");
        $this->view("templates/footer");
    }

    public function viewManageSales(): void
    {
        $this->view("templates/header", [
            'title'=>"Manajemen Penjualan"
        ]);
        $this->view("pages/admin/manajemen_penjualan");
        $this->view("templates/footer");
    }
}