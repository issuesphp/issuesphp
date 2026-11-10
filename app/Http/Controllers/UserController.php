<?php

namespace App\Http\Controllers;

use App\Models\User;

use Issues\Session\Session;


class UserController extends MainController
{

	public function dashboard() 
	{ 

		Session::accessUsers();	

		return $this->view('user/dashboard');

	}	

	

}



