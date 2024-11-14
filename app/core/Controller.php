<?php

namespace App\Core;

class Controller {
    public ?Model $model;

    public function __construct() {

    }

    public function getModel(): Model {
        return $this->model;
    }

    public function view(string $view, array $data = []): void {
        require __DIR__ . '/../views/' . $view .'.php';
    }
}