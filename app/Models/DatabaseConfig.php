<?php

class DatabaseConfig
{
    // Database configuration variables
    private $host = "127.0.0.1";
    private $dbName = "printful-todo-app";
    private $username = "root";
    private $password = "";

    protected $connect = null;

    public function __construct()
    {
        // Tries to connect to the database
        try {
            $this->connect = new PDO("mysql:host=$this->host;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
        } catch (PDOException $e) {
            // Catches errors if there are any while connecting to the database
            echo $e->getMessage();
        }
    }
}
