<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\SecurityController;

use Issues\Display\Format\Format;

// // $jobject = Format::getObjectFormat($argv);

// $jobject  = Format::getOneObjectFormat($argv);

if (isset($argv[1])) {
	parse_str($argv[1], $_GET); 
}


$params = $_GET['param1'] ?? '';

// print_r($param1);

// exit;


// $jobject = json_decode($param1, true);

$jsonValid = preg_replace('/([a-zA-Z0-9_]+)\s*:\s*([^}]+)/', '"$1": "$2"', $params);


$jobject = json_decode($jsonValid);


// print_r($jobject);

// exit;



$welcome = new SecurityController();

$welcome->signin($jobject);


