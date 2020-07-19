<?php

// Fetches the actions, if none present - null
// Iegūst darbības, ja neviena nav - nevienu
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

// Switch containing the post cases of the tasks
// Switch, kas satur POST gadījumus lietām
switch ($action) {
    // New task added case
    // Pievienot jaunu gadījums
    case 'add':
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            if (empty($title)) {
                $error = "Virsraksta lauks ir obligāts";
            } else {
                $db->action("INSERT INTO tasks (title,description) VALUES ('$title','$description')");
                header("Location:/");
            }
        }
        require_once 'resources/views/AddTask.php';
        break;
    // Task edit case
    // Labot lietu gadījums
    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            foreach ($db->getData("SELECT * FROM tasks WHERE id='$id'") as $row) {
                $title = isset($row['title']) ? $row['title'] : '';
                $description = $row['description'];
            }
        }
        if (isset($_POST['submit'])) {
            $title_new = $_POST['title'];
            $description_new = $_POST['description'];
            if (empty($title_new)) {
                $error = "Virsraksta lauks ir obligāts";
            } else {
                $db->action("UPDATE tasks SET title = '$title_new', description = '$description_new' WHERE id = '$id'");
                header("Location:/");
            }
        }
        require_once 'resources/views/EditTask.php';
        break;
    // Task completed case
    // Pabeigta lieta gadījums
    case 'complete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            foreach ($db->getData("SELECT * FROM tasks WHERE id='$id'") as $row) {
                if($row['completed'] == 0) {
                    $db->action("UPDATE tasks SET completed = 1 WHERE id = '$id'");
                    header("Location:/");
                } else {
                    $db->action("UPDATE tasks SET completed = 0 WHERE id = '$id'");
                    header("Location:/");
                }
            }
            header("Location:/");
        }
        require_once 'resources/views/index.php';
        break;
    // Task delete case
    // Dzēst lietu gadījums
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $db->action("DELETE FROM tasks WHERE id = '$id'");
            header("Location:/");
        }
        break;
    // The default case which just fetches the tasks and orders them by completed state, date added
    // Noklusējuma gadījus, kas iegūst lietas un kārto tās pēc izpildītā un datuma
    default:
        $data = $db->getData("SELECT * FROM tasks ORDER BY completed ASC, date ASC");
        require_once 'resources/views/index.php';
        break;
}
