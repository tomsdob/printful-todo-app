<?php

// Includes the Database Connection Model
// Pievieno Database Connection modeli
include './app/Models/DatabaseConnection.php';

// Connects to the database using DatabaseConnection function
// Savieno datubāzi izmantojot DatabaseConnection funkciju
$db = new DatabaseConnection();

// Checks if the Controller is present
// Pārbauda, vai ir pieejams Controller
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
} else {
    $controller = '';
}

// Fetch the Tasks Controller if the Controller is present to complete the actions
// Iegūst Tasks Controller, ja tāds ir pieejams, lai izpildītu darbības
switch ($controller){
    default:
        require_once './App/Controllers/TasksController.php';
        break;
}
