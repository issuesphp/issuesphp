<?php

include 'vendor/Issues/Display/Routes/Start.php';


if (empty($_GET['controller'])&&empty($_GET['method'])) {	

	routeInit();
}


?>