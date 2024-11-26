<?php

namespace App\Controllers;

require_once __DIR__ . '/../core/Controller.php';

use App\Core\Controller;

class Home extends Controller {

    public function index(): void {
        $data['title'] = "Raza Bordir";
        $this->view("templates/header", $data);
        $this->view("index");
        $this->view("templates/footer");
    }
}
