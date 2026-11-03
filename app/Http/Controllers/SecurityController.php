<?php

namespace App\Http\Controllers;

// use App\Models\Welcome;


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

		var_dump($request);

		// $welcome = new Welcome();


		// print_r($welcome->insert($data));


	}



}



