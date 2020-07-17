<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

switch ($action) {
    case 'add':
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            if (empty($title) || empty($description)) {
                $error = "No data provided";
            } else {
                $db->action("INSERT INTO tasks (title,description) VALUES ('$title','$description')");
                header("Location:/");
            }
        }
        require_once 'resources/views/AddTask.php';
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            foreach ($db->getData("SELECT * FROM tasks WHERE id='$id'") as $row) {
                $title = isset($row['title']) ? $row['title'] : '';
                $description = isset($row['description']) ? $row['description'] : '';
            }
        }
        if (isset($_POST['submit'])) {
            $title_new = $_POST['title'];
            $description_new = $_POST['description'];
            if (empty($title) || empty($description)) {
                $error = "No data provided";
            } else {
                $db->action("UPDATE tasks SET title = '$title_new', description = '$description_new' WHERE id = '$id'");
                header("Location:/");
            }
        }
        require_once 'resources/views/EditTask.php';
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $db->action("DELETE FROM tasks WHERE id = '$id'");
            header("Location:/");
        }
        break;
    default:
        $data = $db->getData("SELECT * FROM tasks");
        require_once 'resources/views/index.php';
        break;
}
