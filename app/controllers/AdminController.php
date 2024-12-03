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
            'title'=>"Dashboard"
        ]);
        $this->view("pages/admin/kelola_pesanan");
        $this->view("templates/footer");
    }
}