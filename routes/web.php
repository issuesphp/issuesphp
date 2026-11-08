<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;

if (!empty($_SERVER["REQUEST_METHOD"])) {
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		

		$email = htmlspecialchars($_POST['email']);
		$pass = htmlspecialchars($_POST['password']);


		$requestLogin = array(
			"email" => $email, 
			"password" => $pass          
		);



		Route::post('security', 'signin','signin', 'signin',$requestLogin);				
		


	}

}


function routeFactory($segment,$param1,$param2,$param3) {

	Route::get('welcome', 'index', 'welcomes',$segment);	

	Route::get('security', 'login', 'login',$segment);

}



?>