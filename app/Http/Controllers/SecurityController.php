<?php

namespace App\Http\Controllers;

use App\Models\Security;

use App\Models\User;

use Issues\Session\Session;

use Issues\Helper\Hash;


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
			
			Session::set('email', $data['email']);
			Session::set('role_id', $data['role_id']);

			$userEmail = Session::get('email');
			$userRol = Session::get('role_id');
			

			$this->nivUsers($data['role_id']);				


		}else{ 

			$this->login();

		}		


	}

	public function nivUsers($userInfo)
	{


		switch ($userInfo) {
			case 1:	

			return $this->redirectGo('user','dashboard');		

			break;		
			case 2:		

			break;
			default:

			echo "Role not Found";					
		}


	}

	public function register() 
	{ 
		
		$numberone = Hash::randomNumber(1,100);
		$numbertwo = Hash::randomNumber(1,100);

		$total = $numberone + $numbertwo;		

		$data=array(					
			'question1' => $numberone,
			'question2' => $numbertwo,
			'total' => $total    
		);		

		return $this->view('security/register',$data);

	}

	public function store($request) 
	{
		
		$security = new Security();

		$user = new User();


		if ($request->question == $request->total) {


			$data=array(					
				'email' => $request->email,
				'username' => $request->username,
				'password' => $request->password,
				'role_id' => '2'											
			);

			$info = $user->insert($data);			

			return $this->redirectGo('security','login');	




		}else{ 

			$this->register();

		}		


	}

	public function logout() {

		Session::destroy();

		return $this->redirectGo('security','login');	

	}



}



