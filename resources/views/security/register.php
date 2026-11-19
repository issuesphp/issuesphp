<?php

require __DIR__.'/../../../bootstrap/app.php';

require 'routes/web.php';

use Issues\Display\Format\FormatView;

use Issues\Display\Fragment\Fragment;

$data = FormatView::getArrayObjectFormat($argv);

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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

		<?php Fragment::include('inc/navbar')?>

		<div class="wrap">

			<div class="col-lg-8 mb-4 offset-md-2">

				<h1>Register</h1>

				<hr>

				<form action="save" method="POST" accept-charset="utf-8">



					<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" value="test@gmail.com">

						<br>

						<label>Username:</label>
						<input type="text" name="username" class="form-control" value="test">

						<br>

						<label>Password:</label>
						<input type="text" name="password" class="form-control" value="555">

						<br>

						<label>What is the sum?: <?php echo $data->question1?>+<?php echo $data->question2?></label>
						<input type="text" name="question" class="form-control" value="123">

						<input type="hidden" name="total" value="<?php echo $data->total?>">

					</div>




					<div class="form-group col-xs-3 col-sm-3 col-md-12 col-lg-12">
						<button type="submit" class="btn btn-primary" name="send">Send</button>

					</div>


				</form>


			</div>

		</div>


	</body>


	</html>

