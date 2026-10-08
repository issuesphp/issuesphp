<?php

namespace App\Models;


use Issues\Model\IpModel;

include PATH_MAIN;

include PATH_MODEL;


class User extends IpModel
{	

	public $table = 'welcomes';

	public function getWelcomes()
	{ 		

		$query = IpModel::chosenAll($this->table);
		return $query;	

	}				
}
