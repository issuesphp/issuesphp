<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\WelcomeController;


$welcome = new WelcomeController();

$welcome->add();


