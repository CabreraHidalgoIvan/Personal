<?php

namespace App\Model;

use \PDO, \PDOException;

class Connection
{

    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $db = "db_superhero";
    private static $port = "3306";

    private static $connection;

    public static function connect()
    {
        $dsn = "mysql:host=" . self::$host . ";"
            . "dbname=" . self::$db . ";"
            . "port=" . self::$port;

        try {

            return new PDO($dsn, self::$user, self::$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        } catch (PDOException $e) {
            printf("Error connecting to database: %s\n", $e->getMessage());
            exit();
        }
    }

}