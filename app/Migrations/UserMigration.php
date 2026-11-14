<?php


namespace App\Migrations;

use App\Models\Security;


class UserMigration 
{

	public function top() 
	{ 

		$user = new Security();

		$user->getAuthTable();
		
		$dataAdmin = array(
			"email" => 'admin@issuesphpframework.online',
			"username" => 'issuesphp',
			"password" => 'Demo123',
			"role_id" => '1'          
		);

		$infoA = $user->insert($dataAdmin);

		$dataUser = array(
			"email" => 'user@issuesphpframework.online',
			"username" => 'issuesphp',
			"password" => 'Demo123',
			"role_id" => '2'          
		);

		$infoU = $user->insert($dataUser);

		print_r($infoA);
		

	}

	public function bot() 
	{ 

		

	}

	

}



