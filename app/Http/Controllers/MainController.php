<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;

use Issues\Session\Session;


class MainController extends IpController
{
	

	public static $userSession;
        

	public function __construct() 
	{

		Session::init();

		$this->setSession();
		
	}

	protected function setSession($key = null, $value = null) {

		Session::set($key, $value);
		
	}	


}



