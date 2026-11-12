<?php

namespace App\Models;

use Issues\Model\IpModel;



class Security extends MainModel
{	

	public $table = 'users';

	public function checkUser($email, $password)
	{ 		

		$query = IpModel::getUserLogin($this->table,$email, $password);
		return $query;	

	}

	public function getAuthTable()
	{ 		

		$query = IpModel::createAuthTable($this->table);
		return $query;	

	}

	
}
