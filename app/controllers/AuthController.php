<?php

namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
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
