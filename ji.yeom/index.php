<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>PIN YOUR PINS</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="view-window display-flex flex-line-center" style="background-image:url('img/pin-main.png')">
		<div style="width: 80%; margin: auto;">
			<h1 style="color:#fff">FOR MY DAMN SELF</h1>
			<p style="color:#fff">Pin to me, from me</p>
			<a href="product_list.php">
				<button type="button" class="form-button primary" style="max-width: 300px">SHOP ALL</button>
			</a>
		</div>
	</div>

<br>
	<div class="container">
		<h2>Best Seller</h2>
			<div class="grid gap">
			<?php

			$rows = getRows(
				makeConn(),
				"SELECT *
				FROM `products`
				ORDER BY `date_modify` DESC
				LIMIT 6
				"
			); // ` use for names of columns or tables // " for values

			echo array_reduce(
				$rows,
				'homeListTemplate'
			);

			?>
			</div> 
	</div>

<br>
<br>
	<div class="container">
		<h2>Shop by Category</h2>
<!-- 		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<figure class="product-figure">
					<img src="img/shop-pins.jpg" alt="shop-pins">
						<a href="product_list.php">
						<h5 align="center">SHOP PINS</h5>
						</a>
				</figure>
			</div>
			<div class="col-xs-12 col-md-6">				
				<figure class="product-figure">
					<img src="img/shop-patches.jpg" alt="shop-patches">
						<a href="product_list.php">
						<h5 align="center">SHOP PATCHES</h5>
						</a>
				</figure>
			</div>
		</div>
	</div> -->
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<a href="product_list.php" class="display-block">
					<figure class="product-figure overlay">
						<img src="img/shop-pins.jpg" alt="">
						<figcaption class="display-flex flex-align-center flex-justify-center">SHOP PINS</figcaption>
					</figure>
				</a>
			</div>
			<div class="col-xs-12 col-md-6">
				<a href="product_list.php" class="display-block">
					<figure class="product-figure overlay">
						<img src="img/shop-patches.jpg" alt="">
							<figcaption class="display-flex flex-align-center flex-justify-center">SHOP PATCHES</figcaption>
					</figure>
				</a>
			</div>
		</div>

<br>
		<hr>
		<div class="container" align="center">
			<h3>Sign up to enjoy 10% off your first order</h3>
			<p>Subscribe to our newsletter to receive email updates for new product releases, special offers and other events.</p>
			<div class="container">
				<div class="form-control display-flex flex-align-center flex-justify-center" style="max-width: 400px">
					<!-- <div class="flex-none"> -->
						<input type="text" class="form-input" placeholder="Enter your email">
					<!-- </div> -->
					<div class="flex-none">
						<button type="button" class="form-button third">SUBSCRIBE</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php include "parts/footer.php" ?>
</body>
</html>