<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\SecurityController;


$welcome = new SecurityController();

$welcome->login();


