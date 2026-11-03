<?php

require __DIR__.'/../bootstrap/app.php';

use Issues\Display\Routes\Route;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	

	$requestWelcome = array(
		"username" => $username, 
		"password" => $password          
	);

	$email = htmlspecialchars($_POST['email']);
	$pass = htmlspecialchars($_POST['password']);


	$requestLogin = array(
		"email" => $email, 
		"password" => $pass          
	);



	Route::post('welcome', 'store','save', 'save',$requestWelcome);

	Route::post('security', 'signin','signin', 'signin',$requestLogin);				
	


}


function routeFactory($segment,$param1,$param2,$param3) {

	Route::get('welcome', 'index', 'welcomes',$segment);

	Route::get('welcome', 'add', 'create',$segment,$param1);

	Route::get('welcome', 'show', 'show',$segment,$param1);

	Route::get('welcome', 'delete', 'delete',$segment,$param1);

	Route::get('security', 'login', 'login',$segment);

}



?>