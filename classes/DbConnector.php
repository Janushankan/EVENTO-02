<?php

namespace classes;

use PDO;
use PDOException;

class DbConnector {

    private static $host = "localhost";
    private static $dbname = "event_planner";
    private static $dbuser = "root";
    private static $dbpw = "";

    public static function getConnection() {
        try {
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname;
            $con = new PDO($dsn, self::$dbuser, self::$dbpw);
            return $con;
        } catch (PDOException $exc) {
            die("Error in database connection: " . $exc->getMessage());
        }
    }

}

