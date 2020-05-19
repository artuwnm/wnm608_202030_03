<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Login</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="page_title">
			<h2>Login to Account</h2>
		</div>
			<div class="grid gap">
				<div class="col-xs-12 col-md-5">

					<form class="form">
					<div class="form-control">
							<label for="email" class="form-label">Email</label>
							<input type="text" class="form-input" name="email">
						</div>
					

					<div class="form-control">
							<label for="password" class="form-label">Password</label>
							<input type="text" class="form-input" name="password">
					</div>
					


					<div class="card flat">
					<a class="form-button confirm_1" href="">Log In</a>
				</div>

				
				</div>
				<div class="col-xs-12 col-md-2">
				</div>

				<div class="col-xs-12 col-md-5">
					
					<div class="card flat">
						<p>LOGIN WITH FACEBOOK</p>

						<a class="form-button fb" href="">Login with Facebook</a>
						
					</div>
					</div>

					
				</div>

			</div>
		


	<?php include "parts/footer.php" ?>
	
</body>
</html>