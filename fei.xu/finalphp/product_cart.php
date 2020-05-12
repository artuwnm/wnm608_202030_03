<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";
$cartItems = getCartItems();
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Cart</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>
	<h3>Shopping Cart</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card soft3">

				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<?= cartTotals() ?>
					<br>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button5">PROCEED TO CHECKOUT</a>
					</div>
				</div>
			</div>
		</div>
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