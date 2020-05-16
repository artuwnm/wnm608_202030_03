<?php

session_start();
$_SESSION['cart'] = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Confirmation</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<div class="card">
			<br>
			<div class="purchasing">
				Thanks for purchasing! 
			</div>
			<br>
			<div class="purchasing1">
				A confirmation as been sent to your email. 
				<br>
				Your order hasn't shipped yet, but we'll send you an email when it does.
			</div>
			<div>
				<a class="form-button6" href="product_list.php">Continue Shopping</a>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div class="footer-content">

			<div class="footer-section about">
				<h1>Caliwater</h1>
				<p>CALIWATER is a store selling water with different fruit flavors. Instead of boring old water, “Caliwater” makes water delicious without sugar or sweeteners. </p>
			</div>

			<div class="footer-section about2">
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