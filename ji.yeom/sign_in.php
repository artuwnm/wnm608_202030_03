<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container" style="padding-top: 20px;">
		<div class="card" style="max-width: 800px; margin: auto">
			<h1>Login</h1>

			<form class="form">
			    <!-- <label class="form-label">Email</label> -->
			    <input type="text" name="email" class="form-input form-control" placeholder="Email" required>
				<!-- <label class="form-label">Password</label> -->
			    <input type="password" name="password" class="form-input" placeholder="Password" required>
				<div class="display-flex">
					<div class="flex-stretch">
						<label class="checkbox"><p>Remember me</p>
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="display-flex flex-align-center flex-justify-center">
						<a href="">Forgot password?</a>
					</div>
				</div>
			    <button class="form-button primary form-control">LOGIN</button>
			</form>
			
			<h4 style="text-align: center">OR</h4>
			
			<div class="form-control" style="padding-bottom: 3em">
				<!-- <p style="text-align:center">Login with Social Media</p> -->
				<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<a href="#" class="fb form-button third">
						  <i class="fa fa-facebook fa-fw"></i> Login with Facebook
						 </a>
					</div>
					<div class="col-xs-12 col-md-4">
						<a href="#" class="twitter form-button third">
						  <i class="fa fa-twitter fa-fw"></i> Login with Twitter
						</a>
					</div>
					<div class="col-xs-12 col-md-4">
						<a href="#" class="google form-button third"><i class="fa fa-google fa-fw">
						  </i> Login with Google+
						</a>
					</div>
				</div>
			</div>
<hr>
			<p style="text-align: center">Don't have an account? <span style="text-decoration: underline"><a href="">Sign up here</a></span></p>

<!-- 			<div class="card light" style="padding: 1em">
					<h4 style="text-align: center">New here?</h4>
					<button class="form-button">Create New Account</button>
			</div> -->
		</div>
	</div>



	<?php include "parts/footer.php" ?>

</body>
</html>