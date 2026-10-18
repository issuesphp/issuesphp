<?php

require 'routes/web.php';

$segment  = $_GET['controller'] ?? '';
$param1  = $_GET['method'] ?? '';


routeFactory($segment,$param1);


