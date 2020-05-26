<?php

include_once "lib/php/functions.php";

// session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Splendor - fine jewelry</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>

    <?php include "parts/navbar.php" ?>
	<!-- banner -->
    <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url('images/heroimage.jpg')">
    	<div class="container">
    		<h1>JEWELRY WONDERLAND</h1>
		<div class="card-matchtext">
			<a href="product_list.php" class="form-button_frame">VIEW COLLECTION</a>
			</div>
		</div>
	</div>
  	

	<div class="container">
			<h5>NEW JEWELRY</h5>
			<?php recommendedCategory('earrings') ?>
		</div>
	<div>
   <?php include "parts/footer.php" ?>
</div>
</body>
</html>