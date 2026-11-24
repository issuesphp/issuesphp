<?php

require 'routes/web.php';

use Issues\Request\Request;

$segment  = Request::getGet('controller');
$param1  = Request::getGet('method');
$param2  = Request::getGet('segment');
$param3  = Request::getGet('slug');


routeFactory($segment,$param1,$param2,$param3);


