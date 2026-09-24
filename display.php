<?php

include 'vendor/Issues/Display/Routes/Start.php';

$routeNameController  = $_GET['controller'] ?? '';
$routeNameMethod  = $_GET['method'] ?? '';


routeResp($routeNameController , $routeNameMethod);
