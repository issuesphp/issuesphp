<?php

namespace App\Http\Controllers;

use App\Models\Security;

use Issues\Session\Session;


class SecurityController extends MainController
{


	public function login() 
	{    

		return $this->view('security/login');

	}

	public function signin($request) 
	{   

		// $data = array(
		// 	"name" => 'a'      
		// );

		 // print_r("aa");

		// var_dump($request->password);

		// var_dump($request);

		// var_dump($request->email);

		$security = new Security();

		$user = $security->checkUser($request->email,$request->password);

		// print_r($user);

		// print_r($user['id']);

		if ($user) {

			$data=array(
				'id' => $user['id'],		
				'email' => $user['email'],
				'role_id' => $user['role_id']											
			);

			$u = Session::setUserSession($data);

			// print_r($u);

			// $message = 'Welcome to IssuesPHP Framework';

			$data = array(
				"test" => $u      
			);

			return $this->view('welcome/show',$data);


		}

		// print_r($user);


		// print_r($welcome->insert($data));


	}



}



