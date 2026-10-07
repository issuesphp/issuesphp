<?php

include 'vendor/issuesphp/framework/src/Issues/Display/Routes/Start.php';

$routeNameController  = $_GET['controller'] ?? '';
$routeNameMethod  = $_GET['method'] ?? '';


routeGet('welcome', 'index', 'welcomes',$routeNameController,$routeNameMethod);


