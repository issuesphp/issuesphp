<?php

require __DIR__.'/../../../bootstrap/app.php';

use Issues\Helper\Uri;


?>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

		<div class="navbar-header text-left">

			<a class="navbar-brand" href="<?php echo Uri::baseUrl('')?>">IssuesPHP</a>

		</div>



		<li class="nav-item">
			<a class="nav-link" href="<?php echo Uri::baseUrl('login')?>">
				<span class="mr-2 d-lg-inline text-gray-600 small">Login</span>             
			</a>

		</li>                  




	</ul>


</nav>