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

    public function viewManageOrders(): void
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
        $this->view("templates/admin_footer");
    }

    public function viewDetailOrder(int $order_id): void
    {
        try {
            $order = OrderRepository::getSingleOrder($order_id);
        } catch (\PDOException   $e) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }

        $this->view("templates/header", [
            'title'=>"Kelola Pesanan"
        ]);
        $this->view("pages/admin/detail_pesanan", [
            'order' => $order
        ]);
        $this->view("templates/admin_footer");
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

    public function processDeleteProduct(): void
    {
        $data = json_decode(file_get_contents("php://input"), true);

        if (!isset($data['id']) || !isset($data['image'])) {
            $this->sendWarningJSON(400, "Incomplete data!");
            exit;
        }

        try {
            ProductsRepository::deleteSingleProduct($data['id']);
            unlink(PRODUCT_FILE_PATH . $data['image']);
            $this->sendWarningJSON(200, "Successfully to delete product data");
            exit;
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database error!");
        }
    }

    public function processEditProduct(int $product_id): void
    {
        $raw_data = file_get_contents("php://input");

        if (
            !isset($_POST['product_id']) ||
            !isset($_POST['name']) ||
            !isset($_POST['description']) ||
            !isset($_FILES['image']) ||
            !isset($_POST['previous-image']) ||
            !isset($_POST['price'])
        ) {
            $this->sendWarningJSON(400, "Incomplete data!");
            exit;
        }

        $_FILES['image']['new_name'] = uniqid() . '--' . basename($_FILES['image']['name']);

        $is_move_uploaded_file_success = FileManager::moveFile($_FILES, PRODUCT_FILE_PATH);

        if (!$is_move_uploaded_file_success) {
            $this->sendWarningJSON(500, "There is a warning while try to move uploaded file to the server!");
            exit;
        }

        try {
            ProductsRepository::editProduct([
                'product_id' => $_POST['product_id'],
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'image' => $_FILES['image']['new_name'],
                'start_price' => $_POST['price']
            ]);

            
            echo json_encode([
                "status" => "success",
                "message" => "successfully to update product data"
            ]);
            exit;
        } catch (\PDOException $e) {
            $this->sendWarningJSON(500, "Database error!");
            exit;
        }

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