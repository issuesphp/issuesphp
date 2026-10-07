<?php

use Issues\Display\Routes\Route;

include 'vendor/issuesphp/framework/src/Issues/Display/Routes/Route.php';

$routeNameController  = $_GET['controller'] ?? '';
$routeNameMethod  = $_GET['method'] ?? '';


Route::get('welcome', 'index', 'welcomes',$routeNameController,$routeNameMethod);


