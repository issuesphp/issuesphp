<?php


namespace App\Migrations;

use App\Models\Security;


class UserMigration 
{

	public function top() 
	{ 

		$user = new Security();

		$user->getAuthTable();

		

	}

	public function bot() 
	{ 

		

	}

	

}



