<?php

require 'routes/web.php';

$routeNameController  = $_GET['controller'] ?? '';
$routeNameMethod  = $_GET['method'] ?? '';


routeFactory($routeNameController,$routeNameMethod);


