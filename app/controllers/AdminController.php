<?php

namespace App\Controllers;

use App\Core\Controller;

class AdminController extends Controller
{
    public function showLoginPage(): void
    {
        $this->view("templates/header", [
            'title'=>"Admin Login"
        ]);
        $this->view("pages/admin/login");
        $this->view("templates/footer");
    }

    public function processLogin(): void
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($_POST['username'] == "Raza" && $_POST['password'] == "bordir") {
                $_SESSION['username'] = $_POST['username'];
                header("Location: /dashboard");
                return;
            } else {
                echo "Wrong username and password!";
                return;
            }
        }
    }

    public function showDashboard(): void
    {
        $this->view("templates/header", [
            'title'=>"Dashboard"
        ]);
        $this->view("pages/admin/dashboard");
        $this->view("templates/footer");
    }

    public function showKelolaPesananPage(): void
    {
        $this->view("templates/header", [
            'title'=>"Kelola Pesanan"
        ]);
        $this->view("pages/admin/kelola_pesanan");
        $this->view("templates/footer");
    }

    public function showKelolaKatalogProduk(): void
    {
        $this->view("templates/header", [
            'title'=>"Kelola Katalog Produk"
        ]);
        $this->view("pages/admin/kelola_katalog_produk");
        $this->view("templates/footer");
    }

    public function showUlasan(): void
    {
        $this->view("templates/header", [
            'title'=>"Ulasan"
        ]);
        $this->view("pages/admin/ulasan");
        $this->view("templates/footer");
    }

    public function showTambahProduk(): void
    {
        $this->view("templates/header", [
            'title'=>"Tambah Produk"
        ]);
        $this->view("pages/admin/tambah_produk");
        $this->view("templates/footer");
    }
}