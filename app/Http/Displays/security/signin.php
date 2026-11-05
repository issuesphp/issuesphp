<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\SecurityController;

use Issues\Display\Format\FormatDisplay;

$jobjectArray = FormatDisplay::getArrayObjectFormat($argv);

$welcome = new SecurityController();

$welcome->signin($jobjectArray);


