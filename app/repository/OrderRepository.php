<?php

namespace App\Repository;

use App\Core\Database;
use App\Helper\ErrorLog;

class OrderRepository
{
    public static function addNewOrder(array $data): void
    {
        try {
            Database::getConnection()->beginTransaction();
            $stmt1 = Database::getConnection()->prepare(<<<SQL
                INSERT INTO Customers
                    (username, phone, password, address, age)
                VALUES
                    (:username, :phone, :password, :address, :age)
            SQL);
            $stmt1->bindValue(':username', $data['name'], \PDO::PARAM_STR);
            $stmt1->bindValue(':phone', $data['phone'], \PDO::PARAM_STR);
            $stmt1->bindValue(':password', $data['password'], \PDO::PARAM_STR);
            $stmt1->bindValue(':address', $data['address'], \PDO::PARAM_STR);
            $stmt1->bindValue(':age', $data['age'], \PDO::PARAM_INT);
            $stmt1->execute();

            $stmt2 = Database::getConnection()->prepare(<<<SQL
                SELECT
                    customer_id
                FROM Customers
                WHERE username = :username AND phone = :phone
            SQL);
            $stmt2->bindValue(':username', $data['name'], \PDO::PARAM_STR);
            $stmt2->bindValue(':phone', $data['phone'], \PDO::PARAM_STR);
            $stmt2->execute();
            $customer_id = $stmt2->fetch()['customer_id'];

            $stmt3 = Database::getConnection()->prepare(<<<SQL
                INSERT INTO Orders
                    (amount, total_price, order_date, notes, design, product_id, customer_id)
                VALUES (
                    :amount,
                    :price,
                    :order_date,
                    :note,
                    :design,
                    :product_id,
                    :customer_id
                )
            SQL);
            $stmt3->bindValue(':amount', $data['amount'], \PDO::PARAM_INT);
            $stmt3->bindValue(':price', $data['price'], \PDO::PARAM_STR);
            $stmt3->bindValue(':order_date', $data['order_date'], \PDO::PARAM_STR);
            $stmt3->bindValue(':note', $data['note'], \PDO::PARAM_STR);
            $stmt3->bindValue(':design', $data['design'], \PDO::PARAM_STR);
            $stmt3->bindValue(':product_id', $data['product_id'], \PDO::PARAM_INT);
            $stmt3->bindValue(':customer_id', $customer_id, \PDO::PARAM_INT);
            $stmt3->execute();

            Database::getConnection()->commit();
        } catch (\PDOException $e) {
            Database::getConnection()->rollBack();
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

    public static function getAllOrders(): array
    {
        try {
            return Database::getConnection()
                ->query(<<<SQL
                    SELECT
                        c.username AS customer,
                        phone,
                        p.name AS product,
                        amount
                    FROM Orders o
                    INNER JOIN Customers c ON o.customer_id = c.customer_id
                    INNER JOIN Products p ON p.product_id = o.product_id
                SQL)
                ->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
