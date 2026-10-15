<?php

namespace App\Models;


use Issues\Model\IpModel;


class Welcome extends IpModel
{	

	public $table = 'welcomes';

	public function getWelcomes()
	{ 		

		$query = IpModel::chosenAll($this->table);
		return $query;	

	}				
}
