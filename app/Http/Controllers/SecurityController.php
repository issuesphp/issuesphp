<?php

namespace App\Http\Controllers;

use App\Models\Security;


class SecurityController extends MainController
{


	public function login() 
	{    

		return $this->view('security/login');

	}

	public function signin($request) 
	{   

		

		$security = new Security();

		$user = $security->checkUser($request->email,$request->password);

		print_r($user);
	


	}



}



