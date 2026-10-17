<?php

require __DIR__.'/../../../bootstrap/app.php';


use Issues\Display\Routes\Route;


// require 'routes/web.php';

// Route::init();

function getRoute()
{
	// require __DIR__.'/../../../bootstrap/app.php';
	// use Issues\Display\Routes\Route;
	Route::init();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// require 'routes/web.php';

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);


	if (!empty($username) && !empty($password)) {
			// echo "UserName and Password is empty";

			// $username = htmlspecialchars($_POST['username']);
			// $password = htmlspecialchars($_POST['password']);

		$routeNameMethod = array(
			"username" => $username, 
			"password" => $password          
		);

			// routeFactory('save',$routeNameMethod);

			// Route::post('welcome', 'store', 'store',$routeNameMethod);

			// echo "aqui";

			// Route::init();

		getRoute();
	}


}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	

	<meta property="og:image" content="public/assets/img/issuesphp.png" /> 

	<meta name="author" content="Jonathan Castro">
	<meta name="copyright" content="IssuesPHP Framework" /> 

	<title>IssuesPHP Framework</title>

	<link rel="icon" type="image/x-icon" href="public/assets/img/issuesphp.png" />

	<style>		
		body {
			height: 100%;
			background: #fafafa;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: #777;
			font-weight: 300;
		}
		
	</style>
</head>
<body>
	<body>

		<div class="wrap">

			<h1>ADD</h1>

			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" accept-charset="utf-8">
				<div class="row">

					
					<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Username:</label>
						<input type="text" name="username">
						
						<label>Password:</label>
						<input type="text" name="password">
						
					</div>
				</div>

				

				
				<div class="row">

					<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<button type="submit" class="buno btn-success btn-md glyphicon glyphicon-ok " name="enviar" >Enviar</button>
						<button type="reset" class="bdos btn-danger btn-md glyphicon glyphicon-remove" name="cancelar" >Cancelar</button>
					</div>
				</div>

			</form>
			

		</div>


	</body>


	</html>

	<?php

	// if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// 	// require 'routes/web.php';

	// 	$username = htmlspecialchars($_POST['username']);
	// 	$password = htmlspecialchars($_POST['password']);


	// 	if (!empty($username) && !empty($password)) {
	// 		// echo "UserName and Password is empty";

	// 		// $username = htmlspecialchars($_POST['username']);
	// 		// $password = htmlspecialchars($_POST['password']);

	// 		$routeNameMethod = array(
	// 			"username" => $username, 
	// 			"password" => $password          
	// 		);

	// 		// routeFactory('save',$routeNameMethod);

	// 		// Route::post('welcome', 'store', 'store',$routeNameMethod);

	// 		// Route::init();
	// 	}


	// }



	?>
