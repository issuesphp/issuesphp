<?php

require 'routes/web.php';

$segment  = $_GET['controller'] ?? '';
$param1  = $_GET['method'] ?? '';
$param2  = $_GET['segment'] ?? '';
$param3  = $_GET['slug'] ?? '';


routeFactory($segment,$param1,$param2,$param3);


