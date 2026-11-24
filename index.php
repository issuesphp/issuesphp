<?php

require __DIR__.'/bootstrap/app.php';

use Issues\Display\Routes\Route;

use Issues\Request\Request;


if (empty(Request::getGet('controller'))&&empty(Request::getGet('method'))) {	

	Route::init();
}



?>