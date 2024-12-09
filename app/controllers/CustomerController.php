<?php

namespace App\Controllers;

use App\Core\Controller;

class CustomerController extends Controller
{
    public function index(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/index");
        $this->view("templates/footer");
    }

    public function showProduct(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/katalog_produk");
        $this->view("templates/footer");
    }

    public function showOrderInstructions(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/petunjuk_pemesanan");
        $this->view("templates/footer");
    }

    public function clientOrder(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/pesan");
        $this->view("templates/footer");
    }

    public function showDetailProduct(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/detail_produk");
        $this->view("templates/footer");
    }

    public function showOrderForm(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/formulir_pemesanan");
        $this->view("templates/footer");
    }

    public function processOrder(): void
    {
        http_response_code(200);
        echo json_encode([
            "status" => "success",
            "message" => "Form successfully send to server"
        ]);
    }
}
