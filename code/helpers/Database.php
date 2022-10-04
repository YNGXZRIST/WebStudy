<?php

namespace helpers;
use PDO;
use PDOException;

class Database
{
    public static function getConnection()
    {
        try {
            $conn = new PDO("mysql:host=" . 'db' . ";dbname=" . 'web', 'root', 'helloworld');
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $conn;
    }
}
