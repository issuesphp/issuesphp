<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\SecurityController;

use Issues\Display\Format\Format;


if (isset($argv[1])) {
	parse_str($argv[1], $_GET); 
}


$params = $_GET['param1'] ?? '';


$jsonValid = preg_replace('/([a-zA-Z0-9_]+)\s*:\s*([a-zA-Z0-9_@.]+)/', '"$1":"$2"', $params);

$array = json_decode($jsonValid);

$welcome = new SecurityController();

$welcome->signin($array);


