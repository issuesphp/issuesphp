<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;

use Issues\Request\Request;


function routeFactory($segment,$param1,$param2,$param3) {

	Route::get('welcome', 'index', 'welcomes',$segment);	

	Route::get('security', 'login', 'login',$segment);

	Route::get('security', 'logout', 'logout',$segment);

	Route::get('security', 'register', 'register',$segment);

	Route::get('user', 'dashboard', 'dashboard',$segment);

	$data = array(
		"email" => Request::getPost('email'), 
		"password" => Request::getPost('password')          
	);

	if (!empty($data)) {
		Route::post('security', 'signin','signin', 'signin',$data);	
	}

	$data = array(
		"email" => Request::getPost('email'),
		"username" => Request::getPost('username'),  
		"password" => Request::getPost('password'),
		"question" => Request::getPost('question'),
		"total" => Request::getPost('total')             
	);

	if (!empty($data)) {
		Route::post('security', 'store','save', 'save',$data);
	}

}



?>