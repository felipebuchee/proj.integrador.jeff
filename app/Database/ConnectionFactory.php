<?php 
namespace app\database;

use PDO;

class ConnectionFactory {

    private static ?PDO $connection = null;

    public static function getConnection(){

        if (self::$connection != null) {
            return self::$connection;
        } else {
            
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            self::$connection = new PDO($dsn, DB_USER, DB_PASS, [PDO::ATTR_PERSISTENT => true]);

            return self::$connection;
        }
        
    }

}