<?php

namespace App\Repository;

use App\Core\Database;
use App\Helper\ErrorLog;

class ProductsRepository
{
    public static function getAllProducts(): array
    {
        try {
            $stmt = Database::getConnection()->query(<<<SQL
            SELECT * 
            FROM Products
            SQL);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
