<?php

namespace App\Models;

use Issues\Model\IpModel;

class Welcome extends MainModel
{	

	public $table = 'welcomes';

	public function getWelcomes()
	{ 		

		$query = IpModel::chosenAll($this->table);
		return $query;	

	}

	public function getWelcomesDbTwo()
	{ 
		

		$query = IpModel::ChosenAll($this->table,2);

		return $query;		

	}

	public function getWelcomesById($id)
	{ 


		$query = IpModel::chosenOrLost($this->table,$id);

		return $query;		

	}

	public function deleteWelcomesById($id)
	{ 	

		$query = IpModel::slipk('welcomes',$id);

		return $query;		

	}

	public function insert($rowData)
	{ 		

		$query = IpModel::introduce('welcomes',$rowData);
		return $query;	

	}						
}
