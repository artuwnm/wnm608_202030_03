<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Snack Shack</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>
	
	<?php include "parts/navbar.php" ?>

	<div class="landing-container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<img src="img/landing_vid_1.gif" alt="" width="100%">
			</div>
	    	<div class="col-xs-12 col-md-8 col-lg-4">
	    		<div class="display-flex flex-align-center flex-justify-center flex-top-down">
	    			<h1>Welcome to Snack Shack</h1>
					<p>Let's start to share the joyness and happiness with your friends and family!</p>
	    			<a class="form-button confirm_landing" href="product_list.php">Explore Now</a>
	    		</div>
	    	</div>
		</div>
	
		<div>
			<h2>Popular Products</h2>
			<?php popularProducts() ?>
		</div>
	</div>
	
	<?php include "parts/footer.php" ?>
	
</body>
</html>