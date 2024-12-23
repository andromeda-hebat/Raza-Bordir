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
    
    public function sendPageMethodNotAllowed(): void
    {
        http_response_code(405);
        $this->view("templates/header", [
            'title' => "HTTP Method Not Allowed!"
        ]);
        $this->view("pages/general/client_method_not_allowed");
    }

    public function sendPageNotFound(): void
    {
        http_response_code(404);
        $this->view("templates/header", [
                'title' => '404 Not Found!'
        ]);
        $this->view("pages/general/page_not_found");
    }
}
