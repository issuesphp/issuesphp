<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;

use Issues\Session\Session;


class MainController extends IpController
{	        

	public function __construct() 
	{

		Session::init();

		Session::set('email', 'user@issuesphpframework.online');
		Session::set('role_id', '2');		
	}	


}



