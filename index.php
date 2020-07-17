<?php

include './app/Models/Crud.php';

$db = new crud();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
} else {
    $controller = '';
}

switch ($controller){
    default:
        require_once './App/Controllers/Controller.php';
        break;
}
