<?php

// Require the bootstrap App class and initiate it
require_once('app/Core/App.php');
new App;

// Defines the root directory
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Defines the app directory where the folders Controllers, Core, Data, Models are
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

// Defines the app directory contained folders
define('CONTROLLERS', ROOT . 'app' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR);
define('DATA', ROOT . 'app' . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR);
define('MODELS', ROOT . 'app' . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR);

// Defines the views directory
define('VIEWS', ROOT . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

// Testing if the directory paths are right
$modules = [ROOT, APP, CONTROLLERS, CORE, DATA];

// Preparing the output
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

spl_autoload_register('spl_autoload', false);

