<?php

namespace app\database;

use PDO;

class DatabaseInitializer
{

    public function init(PDO $connection)
    {
        $connection->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        $connection->exec("USE " . DB_NAME);

        $playersTable = "CREATE TABLE IF NOT EXISTS players (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            birthDate DATE NOT NULL,
            nationality VARCHAR(100) NULL,
            height DECIMAL(4,2) NULL,
            weight DECIMAL(5,2) NULL,
            dominantFoot ENUM('Left', 'Right', 'Both') NULL,
            position ENUM('GK', 'DF', 'MF', 'FW') NULL,
            team VARCHAR(100) NULL,
            image VARCHAR(255) DEFAULT NULL,
            createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        
        $connection->exec($playersTable);

        $usersTable = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            email VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            role VARCHAR(20) NOT NULL DEFAULT 'user',
            createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        
        $connection->exec($usersTable);
    }
}
