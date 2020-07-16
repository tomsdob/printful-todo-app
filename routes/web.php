<?php

Route::set('index.php', function() {
    HomepageController::View('Homepage');
});

Route::set('add', function() {
    TasksController::View('TaskAdd');
});

Route::set('edit', function() {
    TasksController::View('TaskEdit');
});

?>