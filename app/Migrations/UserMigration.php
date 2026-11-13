<?php


namespace App\Migrations;

use App\Models\Security;


class UserMigration 
{

	public function top() 
	{ 

		$user = new Security();

		$user->getAuthTable();

		$data = array(
			"email" => 'contact@issuesphpframework.online',
			"username" => 'issuesphp',
			"password" => '123',
			"role_id" => '2'          
		);

		$info = $user->insert($data);

		print_r($info);

		

	}

	public function bot() 
	{ 

		

	}

	

}



