<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\WelcomeController;

use App\Models\Welcome;

$welcomeModel = new Welcome();

$welcome = new WelcomeController();

$welcome->all($welcomeModel);




