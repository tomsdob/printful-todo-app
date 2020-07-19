<?php

// Requires the Database Configuration Model
// Iegūst Database Configration Modeli
require_once 'DatabaseConfig.php';

class DatabaseConnection extends DatabaseConfig
{
    public function __construct()
    {
        parent::__construct();
    }

    // Fetches the database data
    // Iegūst datubāzes datus
    public function getData($sql){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Connects to the database
    // Savienojas ar datubāzi
    public function action($sql){
        $this->connect->exec($sql);
    }
}
