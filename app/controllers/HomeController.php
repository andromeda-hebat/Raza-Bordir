<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {

    public function index(): void {
        $this->view("templates/header", [
            'title'=>"Raza Bordir"
        ]);
        $this->view("index");
        $this->view("templates/footer");
    }
}
