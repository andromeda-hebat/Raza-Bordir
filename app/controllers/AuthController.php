<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\UserRepository;

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
            exit;
        }

        try {
            $user = UserRepository::getUserByUserIDAndPassword($_POST['username'], $_POST['password']);
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database connectivity error!");
            exit;
        }

        if ($user == false) {
            $this->sendWarningJSON(401, "Username dan password tidak sesuai! Mohon coba lagi!");
            exit;
        }

        $_SESSION['username'] = $_POST['username'];
        if (strcasecmp($user['role'], 'admin') == 0) {
            header('Content-Type: application/json');
            echo json_encode(['redirect' => '/dashboard']);
        }
    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
        header('Location: /');
    }
}
