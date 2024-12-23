<?php

namespace App\Controllers;

use App\Core\Controller;

class CustomerController extends Controller
{
    public function viewProduct(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/katalog_produk");
        $this->view("templates/footer");
    }

    public function viewDetailProduct(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/detail_produk");
        $this->view("templates/footer");
    }
}
