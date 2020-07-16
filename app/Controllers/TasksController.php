<?php 

class TasksController extends Controller {
    public static function View($viewName) {
        require_once("./resources/views/task/$viewName.php");
    }
}

?>