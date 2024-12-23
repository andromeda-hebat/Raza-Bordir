<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repository\{OrderRepository, ProductsRepository};
use App\Helper\FileManager;

class AdminController extends Controller
{
    public function viewDashboard(): void
    {
        try {
            $total_order = OrderRepository::getTotalOrder();
            $top_3_highest_order = OrderRepository::getTop3HighestOrder();
        } catch (\Throwable $th) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }


        $this->view("templates/header", [
            'title'=>"Dashboard"
        ]);
        $this->view("pages/admin/dashboard", [
            'total_order' => $total_order,
            'top_3_highest_order' => $top_3_highest_order
        ]);
        $this->view("templates/admin_footer");
    }

    public function viewMangeOrders(): void
    {
        try {
            $orders = OrderRepository::getAllOrders();
        } catch (\PDOException   $e) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }

        $this->view("templates/header", [
            'title'=>"Kelola Pesanan"
        ]);
        $this->view("pages/admin/kelola_pesanan", [
            'orders' => $orders
        ]);
        $this->view("templates/footer");
    }

    public function viewManageProductCatalog(): void
    {
        try {
            $products = ProductsRepository::getAllProducts();
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }


        $this->view("templates/header", [
            'title'=>"Kelola Katalog Produk"
        ]);
        $this->view("pages/admin/kelola_katalog_produk", [
            'products' => $products
        ]);
        $this->view("templates/admin_footer");
    }

    public function viewUlasan(): void
    {
        $this->view("templates/header", [
            'title'=>"Ulasan"
        ]);
        $this->view("pages/admin/ulasan");
        $this->view("templates/footer");
    }

    public function viewAddProduct(): void
    {
        $this->view("templates/header", [
            'title'=>"Tambah Produk"
        ]);
        $this->view("pages/admin/tambah_produk");
        $this->view("templates/footer");
    }

    public function processAddProduct(): void
    {
        if (
            !isset($_POST['name']) ||
            !isset($_POST['description']) ||
            !isset($_FILES['image']) ||
            !isset($_POST['price'])
        ) {
            $this->sendWarningJSON(400, "Incomplete data!");
            exit;
        }

        $_FILES['image']['new_name'] = uniqid() . '--' . basename($_FILES['image']['name']);

        $is_move_uploaded_file_success = FileManager::moveFile($_FILES, __DIR__ . '/../../storage/internal/produk/');

        if (!$is_move_uploaded_file_success) {
            $this->sendWarningJSON(500, "There is a warning while try to move uploaded file to the server!");
            exit;
        }

        try {
            ProductsRepository::addNewProduct([
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'image' => $_FILES['image']['new_name'],
                'start_price' => $_POST['price']
            ]);
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database error!");
            unlink(__DIR__ . '/../../storage/internal/produk/' . $_FILES['image']['new_name']);
            exit;
        }

        http_response_code(200);
        echo json_encode([
            'message'=> "success"
        ]);
    }

    public function viewManageSales(): void
    {
        $this->view("templates/header", [
            'title'=>"Manajemen Penjualan"
        ]);
        $this->view("pages/admin/manajemen_penjualan");
        $this->view("templates/footer");
    }
}