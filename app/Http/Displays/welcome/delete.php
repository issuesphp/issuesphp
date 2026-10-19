<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\WelcomeController;


if (isset($argv[1])) {
    parse_str($argv[1], $_GET);
}

$param1   = $_GET['param1'] ?? '';


$welcome = new WelcomeController();

$welcome->delete($param1);


