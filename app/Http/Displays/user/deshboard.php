<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\UserController;


$welcome = new UserController();

$welcome->dashboard();


