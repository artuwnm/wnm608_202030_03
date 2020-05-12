<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Caliwater</title>

	<?php include "finalparts/meta.php" ?>

	

</head>
<body>
<header>
	<?php include "finalparts/navbar.php" ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>
	<br>
	<br>
	<div class="container2">
		<div class="fling-minislide">
 			<img src="img/ads2-compressor.jpg" alt="Slide 4" />
  			<img src="img/ads1-compressor.jpg" alt="Slide 3" />
  			<img src="img/ads2-compressor.jpg" alt="Slide 2" />
  			<img src="img/ads1-compressor.jpg" alt="Slide 1" />
		</div>
	</div>

	<div class="container2">

		<div class="container1">
  			<img src="img/left-compressor.jpg" alt="left">
  			<a class="btn" href="product_list.php">Buy water</a>
		</div>
	

		<div class="container3">
  			<img src="img/right-compressor.jpg" alt="right">
  			<a class="btn" href="product_list.php">Buy Sparkling</a>
		</div>

	</div>

		<br><br>

	<div class="container5">
		<h2>New Flavor</h2>
		<?php recommendedCategory('water') ?>
	</div>


	<div class="footer">
		<div class="footer-content">

			<div class="footer-section about">
				<h1>Caliwater</h1>
				<p>CALIWATER is a store selling water with different fruit flavors. Instead of boring old water, “Caliwater” makes water delicious without sugar or sweeteners. </p>
			</div>

			<div class="footer-section about">
				<h1>Quick Link</h1>
				<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			</div>

	
	
	
		</div>
		<div class="footer-bottom">
			&copy; Designed by Fei
		</div>
	</div>



</body>
</html>