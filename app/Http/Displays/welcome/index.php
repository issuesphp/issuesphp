<?php

namespace App\Http\Displays;

use App\Http\Controllers\WelcomeController;


include __DIR__ . '../../../Controllers/WelcomeController.php';



$welcome = new WelcomeController();

$welcome->index();


