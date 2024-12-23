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

    public function viewProduct(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/katalog_produk");
        $this->view("templates/footer");
    }

    public function viewOrderInstructions(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/petunjuk_pemesanan");
        $this->view("templates/footer");
    }

    public function viewCustomerOrder(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/pesan");
        $this->view("templates/footer");
    }

    public function processCustomerOrder(): void
    {
        echo json_encode([
            'message'=> "good bro!",
            'data' => $_POST,
            'file' => $_FILES
        ]);
    }

    public function viewDetailProduct(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/detail_produk");
        $this->view("templates/footer");
    }

    public function viewOrderForm(): void
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

    public function viewAboutUs(): void
    {
        $this->view("templates/header", [
            'title' => "Tentang kami"
        ]);
        $this->view("pages/customer/tentang");
        $this->view("templates/footer");
    }

    public function viewContact(): void
    {
        $this->view("templates/header", [
            'title' => "Kontak"
        ]);
        $this->view("pages/customer/kontak");
        $this->view("templates/footer");
    }
}
