<?php

require __DIR__.'/../../../bootstrap/app.php';

use App\Config\AppBase;

use Issues\Config\App\App;

use Issues\Display\Fragment\Fragment;

use Issues\Display\Format\FormatView;


use Issues\Lang\Lang;

$lang = Lang::getLang();

$data = FormatView::getArrayObjectFormat($argv);

?>
<!DOCTYPE html>
<html lang="<?php echo AppBase::APP_LOCALE ?>">
<head>

	<?php echo Fragment::include('inc/header')?>
	

	<title>IssuesPHP Framework</title>

	<?php echo Fragment::metaDescription('Issuesphp is a simple, lightweight framework for developers who create efficient software.')?>


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

		<?php echo Fragment::include('inc/navbar')?>




		<div class="wrap">

			<h1><?php echo $data->message?></h1>
			<p>Version: <?php echo App::ISSUESPHP_VERSION ?></p>		
			<h2>Lang: <?php echo $lang[0]?></h2>
			<br>

			<p>Getting started <a href="https://github.com/issuesphp/issuesphp" class="btn btn-light" target="_blank">Skeleton</a>
				and <a href="https://github.com/issuesphp/framework" class="btn btn-light" target="_blank">Framework</a></p>
				<br>
				<p>Sponsor our project <a href="https://ko-fi.com/issuesphpframework" class="btn btn-light" target="_blank">Donate</a></p>

			</div>


			<?php echo Fragment::include('inc/footer')?>

			


		</body>


		</html>
