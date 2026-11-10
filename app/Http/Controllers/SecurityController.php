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

		$security = new Security();

		$user = $security->checkUser($request->email,$request->password);		

		if ($user) {

			$data=array(
				'id' => $user['id'],		
				'email' => $user['email'],
				'role_id' => $user['role_id']											
			);

			Session::setUserSession($data);

			$userInfo = Session::getUserSession();			

			$this->nivUsers($userInfo);			


		}else{ 

			$this->login();

		}		


	}

	public function nivUsers($userInfo)
	{


		switch ($userInfo['role_id']) {
			case 1:	

			return $this->view('user/dashboard');

			break;		
			case 2:		

			break;
			default:

			echo "Role not Found";					
		}


	}



}



