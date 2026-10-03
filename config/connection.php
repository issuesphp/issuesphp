<?php

namespace config;

class Connection 
{	

	public static function getConnection()
	{ 		
		
		$conn = mysqli_connect('host', 'username', 'password', 'database');

		return $conn;

	}

		
}
