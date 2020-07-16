<?php 

class Controller extends Database {
    public static function View($viewName) {
        require_once("./resources/views/$viewName.php");
    }
}

?>