<?php

namespace Cainallah;

use PDOException;
use PDO;

class Db
{
    public static function connect()
    {
        $dsn = 'mysql:host=localhost;dbname=contact';
        $username = 'root';
        $password = '';

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, $username, $password, $options);
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
