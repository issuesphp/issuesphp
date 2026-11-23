<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;

use Issues\Request\Request;

if (!empty($_SERVER["REQUEST_METHOD"])) {
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		

		if (!empty(Request::getPost('email')) && !empty(Request::getPost('password')) ) {			


			$requestLogin = array(
				"email" => Request::getPost('email'), 
				"password" => Request::getPost('password')          
			);		



			Route::post('security', 'signin','signin', 'signin',$requestLogin);

		}

		
		if (!empty(Request::getPost('email')) && !empty(Request::getPost('password')) && !empty(Request::getPost('username')) && !empty(Request::getPost('question')) && !empty(Request::getPost('total')) ) {
			


			$requestRegister = array(
				"email" => Request::getPost('email'),
				"username" => Request::getPost('username'),  
				"password" => Request::getPost('password'),
				"question" => Request::getPost('question'),
				"total" => Request::getPost('total')             
			);

			Route::post('security', 'store','save', 'save',$requestRegister);	
			

		}					
		


	}

}


function routeFactory($segment,$param1,$param2,$param3) {

	Route::get('welcome', 'index', 'welcomes',$segment);	

	Route::get('security', 'login', 'login',$segment);

	Route::get('security', 'logout', 'logout',$segment);

	Route::get('security', 'register', 'register',$segment);

	Route::get('user', 'dashboard', 'dashboard',$segment);

}



?>