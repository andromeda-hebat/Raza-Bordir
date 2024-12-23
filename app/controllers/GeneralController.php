<?php

namespace App\Controllers;

use App\Core\Controller;

class GeneralController extends Controller
{
    public function index(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/general/index");
        $this->view("templates/footer");
    }

    public function viewAboutUs(): void
    {
        $this->view("templates/header", [
            'title' => "Tentang kami"
        ]);
        $this->view("pages/general/tentang");
        $this->view("templates/footer");
    }

    public function viewContact(): void
    {
        $this->view("templates/header", [
            'title' => "Kontak"
        ]);
        $this->view("pages/general/kontak");
        $this->view("templates/footer");
    }
}
