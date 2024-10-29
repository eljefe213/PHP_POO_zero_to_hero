<?php

namespace Models;

class User
{
    private static \PDO $pdo;

    public function __construct()
    {
        try {
            static::$pdo = new \PDO('mysql:dbname=oop;host=127.0.0.1', 'root', '', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}
