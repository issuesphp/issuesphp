<?php

namespace App\Triggers;

require __DIR__.'/../../../bootstrap/app.php';


use App\Migrations\UserMigration;


$welcome = new UserMigration();

$welcome->top();


