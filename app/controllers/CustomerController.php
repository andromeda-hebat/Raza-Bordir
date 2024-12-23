<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Helper\FileManager;
use App\Repository\OrderRepository;

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
        if (
            !isset($_POST['name']) || !isset($_POST['phone']) ||
            !isset($_POST['address']) || !isset($_POST['amount']) ||
            !isset($_POST['price']) || !isset($_POST['media']) ||
            !isset($_FILES['design']) || !isset($_POST['note'])
        ) {
            $this->sendWarningJSON(400, "Data tidak komplit!");
            exit;
        }

        $_FILES['design']['new_name'] = uniqid() . '--' . basename($_FILES['design']['name']);

        $is_move_uploaded_file_success = FileManager::moveFile($_FILES, __DIR__ . '/../../storage/uploads/design_request/');

        if (!$is_move_uploaded_file_success) {
            $this->sendWarningJSON(500, "There is a warning while try to move uploaded file to the server!");
            exit;
        }

        try {
            OrderRepository::addNewOrder([
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'amount' => $_POST['amount'],
                'price' => $_POST['price'],
                'media' => $_POST['media'],
                'design' => $_FILES['design']['name'],
                'note' => $_POST['note']
            ]);
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }

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
