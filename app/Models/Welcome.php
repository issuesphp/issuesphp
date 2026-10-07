<?php

namespace App\Models;


use Issues\Model\IpModel;


include 'vendor/issuesphp/framework/src/Issues/Model/IpModel.php';


class User extends IpModel
{	

	public $table = 'welcomes';

	public function getWelcomes()
	{ 		

		$query = IpModel::chosenAll($this->table);
		return $query;	

	}				
}
