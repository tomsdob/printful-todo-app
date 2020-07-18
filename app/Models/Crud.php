<?php

require_once 'DatabaseConfig.php';

class Crud extends DatabaseConfig
{
    public function __construct()
    {
        parent::__construct();
    }

    // Fetches the database data
    public function getData($sql){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Connects to the database
    public function action($sql){
        $this->connect->exec($sql);
    }
}
