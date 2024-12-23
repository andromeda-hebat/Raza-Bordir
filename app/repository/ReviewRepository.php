<?php

namespace App\Repository;

use App\Core\Database;
use App\Helper\ErrorLog;

class ReviewRepository
{
    public static function addNewReview(array $data): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                INSERT INTO Reviews
                VALUES (
                    :param
                )
            SQL);
            $stmt->bindValue(':param', $data['param'], \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function editReview(array $data): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                UPDATE Reviews
                SET column = :param
            SQL);
            $stmt->bindValue(':param', $data['param'], \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }

    public static function deleteSingleReview(array $data): void
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                DELETE Reviews
                WHERE column = :param
            SQL);
            $stmt->bindValue(':param', $data['param'], \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
