<?php

namespace App\Core;

class Controller {

    protected function view(string $view, array $data = []): void {
        require __DIR__ . '/../views/' . $view .'.php';
    }

    public function sendPageMethodNotAllowed(): void
    {
        http_response_code(405);
        $this->view("templates/header", [
            'title' => "HTTP Method Not Allowed!"
        ]);
        $this->view("pages/general/client_method_not_allowed");
    }

    public function sendPageNotFound(): void
    {
        http_response_code(404);
        $this->view("templates/header", [
                'title' => '404 Not Found!'
        ]);
        $this->view("pages/general/page_not_found");
    }

    public function sendWarningJSON(int $response_code, string $message): void
    {
        http_response_code($response_code);
        echo json_encode([
            "status"=>"error",
            "message"=>$message
        ]);
    }
}
