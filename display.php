<?php

include 'vendor/issuesphp/framework/src/Issues/Display/Routes/Start.php';

$routeNameController  = $_GET['controller'] ?? '';
$routeNameMethod  = $_GET['method'] ?? '';


routeResp($routeNameController , $routeNameMethod);
