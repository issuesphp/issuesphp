<?php

include 'vendor/issuesphp/framework/src/Issues/Display/Routes/Start.php';


if (empty($_GET['controller'])&&empty($_GET['method'])) {	

	routeInit();
}


?>