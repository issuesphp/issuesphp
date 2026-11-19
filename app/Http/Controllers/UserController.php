<?php

namespace App\Http\Controllers;

use App\Models\User;

use Issues\Session\Session;

use Issues\Rule\Rule;


class UserController extends MainController
{

	public function dashboard() 
	{ 

		if (Session::get('role_id') != 2) {

			return Rule::customRuleAccess('401');
		}

		return $this->view('user/dashboard');

	}	

	

}



