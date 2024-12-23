<?php

namespace App\Repository;

use App\Core\Database;
use App\Helper\ErrorLog;

class UserRepository
{
    public static function getUserByUserIDAndPassword(string $user_id, string $password): bool|array
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT 
                    username, password, role
                FROM USERS
                WHERE username = ?;
            SQL);
            $stmt->bindValue(1, $user_id, \PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
            return password_verify($password, $user['password']) ? $user : false;
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
