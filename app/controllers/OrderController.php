<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\{OrderRepository, ProductsRepository};
use App\Helper\FileManager;

class OrderController extends Controller
{
    
    public function viewCustomerOrder(): void
    {
        $products = ProductsRepository::getAllProducts();
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/pesan", [
            'products' => $products
        ]);
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

    public function processCustomerOrder(): void
    {
        if (
            !isset($_POST['name']) || !isset($_POST['phone']) ||
            !isset($_POST['address']) || !isset($_POST['amount']) ||
            !isset($_POST['price']) || !isset($_POST['product_id']) ||
            !isset($_FILES['design']) || !isset($_POST['note'])
        ) {
            $this->sendWarningJSON(400, "Incomplete data request!");
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
                'password' => 'dummy-password',
                'address' => $_POST['address'],
                'age' => 20,
                'amount' => $_POST['amount'],
                'price' => $_POST['price'],
                'product_id' => $_POST['product_id'],
                'design' => $_FILES['design']['new-name'],
                'note' => $_POST['note'],
                'order_date' => date('Y-m-d')
            ]);
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database error!");
            unlink(__DIR__ . '/../../storage/uploads/design_request/' . $_FILES['design']['new_name']);
            exit;
        }

        http_response_code(200);
        echo json_encode([
            'message'=> "success"
        ]);
    }

    
    public function viewCheckOrder(): void
    {
        $this->view("templates/header", [
            'title' => "Raza Bordir"
        ]);
        $this->view("pages/customer/cek_pesanan");
        $this->view("templates/footer");
    }

    public function processCheckOrder(): void
    {
        if (!isset($_GET['data']) || !isset($_GET['search_type'])) {
            $this->sendWarningJSON(400, "Data is not complete");
            exit;
        }

        $result = OrderRepository::checkOrderStatus($_GET['data'], $_GET['search_type']);

        if ($result == false) {
            http_response_code(404);
            echo json_encode([
                'status' => 'failed',
                'data' => 'nothing'
            ]);
            exit;
        }

        http_response_code(200);
        echo json_encode([
            'status' => 'failed',
            'data' => $result
        ]);
    }
}
