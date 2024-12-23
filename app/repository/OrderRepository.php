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
}
