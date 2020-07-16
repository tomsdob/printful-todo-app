<?php

Route::set('index.php', function() {
    HomepageController::View('Homepage');
});

Route::set('task/add', function() {
    TasksController::View('TaskAdd');
});

Route::set('task/edit', function() {
    TasksController::View('TaskEdit');
});

?>