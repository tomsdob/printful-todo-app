<?php

require_once 'DatabaseConfig.php';

class Crud extends DatabaseConfig
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($sql){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function action($sql){
        $this->connect->exec($sql);
    }
}
