<?php

include 'vendor/issuesphp/framework/src/Issues/Config/App/path.php';

// include PATH_MAIN;

include PATH_APP;


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
		div.logo {
			height: 200px;
			width: 155px;
			display: inline-block;
			opacity: 0.08;
			position: absolute;
			top: 2rem;
			left: 50%;
			margin-left: -73px;
		}
		body {
			height: 100%;
			background: black;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: #777;
			font-weight: 300;
		}
		h1 {
			font-weight: lighter;
			letter-spacing: 0.8;
			font-size: 3rem;
			margin-top: 0;
			margin-bottom: 0;
			color: #222;
		}
		.wrap {
			max-width: 1024px;
			margin: 5rem auto;
			padding: 2rem;
			background: #fff;
			text-align: center;
			border: 1px solid #efefef;
			border-radius: 0.5rem;
			position: relative;
		}
		pre {
			white-space: normal;
			margin-top: 1.5rem;
		}
		code {
			background: #fafafa;
			border: 1px solid #efefef;
			padding: 0.5rem 1rem;
			border-radius: 5px;
			display: block;
		}
		p {
			margin-top: 1.5rem;
		}
		.footer {
			margin-top: 2rem;
			border-top: 1px solid #efefef;
			padding: 1em 2em 0 2em;
			font-size: 85%;
			color: #999;
		}
		a:active,
		a:link,
		a:visited {
			color: #dd4814;
		}
	</style>
</head>
<body>
	<body>

		<div class="wrap">

			<h1>Welcome to IssuesPHP Framework</h1>
			<p>Version: <?php echo ISSUESPHP_VERSION;?></p>
			<br>

			<p>Getting started <a href="https://github.com/issuesphp/issuesphp" class="btn btn-light" target="_blank">Skeleton</a>
				and <a href="https://github.com/issuesphp/framework" class="btn btn-light" target="_blank">Framework</a></p>
				<br>
				<p>Sponsor our project <a href="https://ko-fi.com/foroworkers" class="btn btn-light" target="_blank">Donate</a></p>

			</div>


		</body>


		</html>
