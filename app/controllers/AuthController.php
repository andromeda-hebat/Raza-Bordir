<?php

namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
    public function viewLoginPage(): void
    {
        $this->view("templates/header", [
            'title'=>"Admin Login"
        ]);
        $this->view("pages/general/login");
        $this->view("templates/footer");
    }

    public function processLogin(): void
    {

        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            $this->sendWarningJSON(400, "Username atau password tidak ditemukan saat request. Mohon coba lagi!");
        }

        if ($_POST['username'] == "Raza" && $_POST['password'] == "bordir") {
            $_SESSION['username'] = $_POST['username'];
            header('Content-Type: application/json');
            echo json_encode(['redirect' => '/dashboard']);
            return;
        } else {
            $this->sendWarningJSON(401, "Username dan password tidak sesuai! Mohon coba lagi!");
            return;
        }
    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
        header('Location: /');
    }
}
