<?php

require __DIR__.'/bootstrap/app.php';

use Issues\Display\Routes\Route;



if (empty($_GET['controller'])&&empty($_GET['method'])) {	

	Route::init();
}


?>