<?php

namespace Models;

use Source\Constant;
use stdClass;

class User
{
    private static \PDO $pdo;
    private string $table = 'users';

    public function __construct()
    {
        try {
            static::$pdo = new \PDO(
                'mysql:dbname=' . Constant::DB_NAME . ';host=' .
                    Constant::DB_HOST,
                Constant::DB_USERNAME,
                Constant::DB_PASSWORD,
                [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function all(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");

        return $statement->fetchAll();
    }

    private function getPDO(): \PDO
    {
        return static::$pdo;
    }
}
