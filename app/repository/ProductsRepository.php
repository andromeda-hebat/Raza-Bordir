<?php

namespace App\Repository;

use App\Core\Database;
use App\Helper\ErrorLog;

class ProductsRepository
{
    public static function getAllProducts(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
                    SELECT * 
                    FROM Products
                SQL)
                ->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function addNewProduct(array $product): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
            INSERT INTO Products
                (name, description, start_price, image)
            VALUES
                (:name, :description, :start_price, :image)
            SQL);
            $stmt->bindValue(':name', $product['name'], \PDO::PARAM_STR);
            $stmt->bindValue(':description', $product['description'], \PDO::PARAM_STR);
            $stmt->bindValue(':start_price', $product['start_price'] , \PDO::PARAM_INT);
            $stmt->bindValue(':image', $product['image'], \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function deleteSingleProduct(int $product_id): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
            DELETE FROM Products
            WHERE product_id = ?
            SQL);
            $stmt->bindValue(1, $product_id, \PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
