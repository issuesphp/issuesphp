<?php

use Issues\Display\Routes\Route;

include PATH_MAIN;

include PATH_ROUTE;


if (empty($_GET['controller'])&&empty($_GET['method'])) {	

	Route::init();
}


?>