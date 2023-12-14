<?php

namespace Cainallah;

include_once "config.php";

use PDOException;
use Cainallah\Db;
use PDO;

class Crud
{
    function read($query)
    {
        try {
            $db = new Db();
            $con = $db->connect();
            $stmt = $con->prepare("$query");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    function create($query, $array)
    {
        try {
            $db = new Db();
            $con = $db->connect();
            $stmt = $con->prepare("$query");
            $result = $stmt->execute($array);
            if ($result == 1) {
                return 'true';
            } else {
                return 'false';
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
