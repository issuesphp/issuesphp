<?php

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

use Issues\Display\Routes\Route;

// include 'vendor/issuesphp/framework/src/Issues/Config/App/path.php';

// include PATH_MAIN;

// include PATH_ROUTE;


if (empty($_GET['controller'])&&empty($_GET['method'])) {	

	Route::init();
}


?>