<?php

namespace App\Models;


use Issues\Model\MainModel;


include 'vendor/issuesphp/framework/src/Issues/Model/MainModel.php';


class User extends MainModel
{	

	public $table = 'welcomes';

	public function getWelcomes()
	{ 		

		$query = MainModel::get($this->table);
		return $query;	

	}				
}
