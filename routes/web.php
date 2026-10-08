<?php

use Issues\Display\Routes\Route;


include PATH_MAIN;

include PATH_ROUTE;



function routeFactory($routeNameController,$routeNameMethod) {	
	

	Route::get('welcome', 'index', 'welcomes',$routeNameController,$routeNameMethod);	


}


?>