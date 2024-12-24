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

    public function viewAboutUs(): void
    {
        $this->view("templates/header", [
            'title' => "Tentang kami"
        ]);
        $this->view("pages/general/tentang");
        $this->view("templates/footer");
    }

    public function viewContact(): void
    {
        $this->view("templates/header", [
            'title' => "Kontak"
        ]);
        $this->view("pages/general/kontak");
        $this->view("templates/footer");
    }

    public function serveStaticImgFile(string $file_name): void
    {
        $img_path = __DIR__ . '/../../storage/internal/produk/' . $file_name;

        if (file_exists($img_path)) {
            $mime_type = mime_content_type($img_path);
            header('Content-Type: ' . $mime_type);
            header('Content-Length: ' . filesize($img_path));

            readfile($img_path);
        } else {
            $this->sendWarningJSON(404, "Image not found!");
            exit;
        }
    }

    public function serveStaticDesignFile(string $file_name): void
    {
        $img_path = __DIR__ . '/../../storage/uploads/design_request/' . $file_name;

        if (file_exists($img_path)) {
            $mime_type = mime_content_type($img_path);
            header('Content-Type: ' . $mime_type);
            header('Content-Length: ' . filesize($img_path));

            readfile($img_path);
        } else {
            $this->sendWarningJSON(404, "Image not found!");
            exit;
        }
    }
}
