<?php

namespace App\Core;

class Model
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
