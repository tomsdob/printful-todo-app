<?php

class DatabaseConfig
{
    // Database configuration variables
    // Datubāzes konfigurācijas vērtības
    private $host = "127.0.0.1";
    private $dbName = "printful-todo-app";
    private $username = "root";
    private $password = "";

    protected $connect = null;

    public function __construct()
    {
        // Tries to connect to the database
        // Mēģina izveidot savienojumu ar datubāzi
        try {
            $this->connect = new PDO("mysql:host=$this->host;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
        } catch (PDOException $e) {
            // Catches errors if there are any while connecting to the database
            // Noķer kļūdas, ja ir kādas savienojoties ar datubāzi
            echo $e->getMessage();
        }
    }
}
