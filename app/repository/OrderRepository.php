<?php

namespace App\Repository;

use App\Core\Database;
use App\Helper\ErrorLog;

class OrderRepository
{
    public static function addNewOrder(array $data): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                INSERT INTO Orders
                VALUES (
                    :name,
                    :phone,
                    :address,
                    :amount,
                    :price,
                    :media,
                    :design,
                    :note
                )
            SQL);
            $stmt->bindValue(':name', $data['name'], \PDO::PARAM_STR);
            $stmt->bindValue(':phone', $data['phone'], \PDO::PARAM_STR);
            $stmt->bindValue(':address', $data['address'], \PDO::PARAM_STR);
            $stmt->bindValue(':amount', $data['amount'], \PDO::PARAM_STR);
            $stmt->bindValue(':price', $data['price'], \PDO::PARAM_STR);
            $stmt->bindValue(':media', $data['media'], \PDO::PARAM_STR);
            $stmt->bindValue(':design', $data['design'], \PDO::PARAM_STR);
            $stmt->bindValue(':note', $data['note'], \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function checkOrderStatus(string $input, string $search_type): bool|array
    {
        try {
            if ($search_type == 'order_id') {
                $query = <<<SQL
                SELECT 
                    order_id, order_date, product_id, amount
                FROM Orders
                WHERE order_id = ?
                SQL;
            } else {
                $query = <<<SQL
                SELECT order_id, order_date, product_id, amount
                FROM Orders o
                INNER JOIN Customers c ON c.customer_id = o.customer_id
                WHERE c.username LIKE ?;
                SQL;
            }

            $stmt = Database::getConnection()->prepare($query);
            $stmt->bindValue(1, ($search_type == 'username') ? $input . '%' : $input, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
