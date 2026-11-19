<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;

if (!empty($_SERVER["REQUEST_METHOD"])) {
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		

		if (!empty($_POST['email']) && !empty($_POST['password']) ) {

			$email = htmlspecialchars($_POST['email']);
			$pass = htmlspecialchars($_POST['password']);


			$requestLogin = array(
				"email" => $email, 
				"password" => $pass          
			);		



			Route::post('security', 'signin','signin', 'signin',$requestLogin);

		}

		
		if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['username']) && !empty($_POST['question']) && !empty($_POST['total']) ) {

			$emailRe = htmlspecialchars($_POST['email']);
			$usernameRe = htmlspecialchars($_POST['username']);
			$passRe = htmlspecialchars($_POST['password']);
			$questionRe = htmlspecialchars($_POST['question']);
			$totalRe = htmlspecialchars($_POST['total']);


			$requestRegister = array(
				"email" => $emailRe,
				"username" => $usernameRe,  
				"password" => $passRe,
				"question" => $questionRe,
				"total" => $totalRe             
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