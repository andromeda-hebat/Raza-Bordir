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
}