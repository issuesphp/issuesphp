<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;


function routeFactory($routeNameController,$routeNameMethod) {	
	

	Route::get('welcome', 'index', 'welcomes',$routeNameController,$routeNameMethod);	


}


?>