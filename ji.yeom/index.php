<!DOCTYPE html>
<html lang="en">
<head>
	<title>PIN YOUR PINS</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="view-window display-flex flex-line-center" style="background-image:url('img/pin-main.png')">
		<div style="width: 70%; margin: auto;">
			<h1 style="color:#fff">FOR MY DAMN SELF</h1>
			<p style="color:#fff">Pin to me, from me</p>
			<a href="product_list.php">
				<button class="button secondary">SHOP ALL</button>
			</a>
		</div>
	</div>
	

	<div class="container">
		<h2>Best Seller</h2>
		<div class="display-flex">
			<div class="flex-stretch">
				<div class="card flat">
					<img src="img/pin.png" alt="pin" style="width:100%">
					<p>Product Name</p>
					<p>Price</p>
					<p>Review</p>
				</div>
			</div>

			<div class="flex-none" style="width: 1em"></div>
			<div class="flex-stretch">
				<div class="card flat">
					<img src="img/pin.png" alt="pin" style="width:100%">
					<p>Product Name</p>
					<p>Price</p>
					<p>Review</p>
				</div>
			</div>

			<div class="flex-none" style="width: 1em"></div>
			<div class="flex-stretch">
				<div class="card flat">
					<img src="img/pin.png" alt="pin" style="width:100%">
					<p>Product Name</p>
					<p>Price</p>
					<p>Review</p>
				</div>
			</div>

			<div class="flex-none" style="width: 1em"></div>
			<div class="flex-stretch">
				<div class="card flat">
					<img src="img/pin.png" alt="pin" style="width:100%">
					<p>Product Name</p>
					<p>Price</p>
					<p>Review</p>
				</div>
			</div>

			<div class="flex-none" style="width: 1em"></div>
			<div class="flex-stretch">
				<div class="card flat">
					<img src="img/pin.png" alt="pin" style="width:100%">
					<p>Product Name</p>
					<p>Price</p>
					<p>Review</p>
				</div>
			</div>

			<div class="flex-none" style="width: 1em"></div>
			<div class="flex-stretch">
				<div class="card flat">
					<img src="img/product6.jpg" alt="pin" style="width:100%">
					<p>Product Name</p>
					<p>Price</p>
					<p>Review</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<h2>Shop by Category</h2>
		<div class="grid gap">
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
	</div>
<br>
<hr>
	<div class="container" align="center">
		<h3>Sign up to enjoy 10% off your first order</h3>
		<p>Subscribe to our newsletter to receive email updates for new product releases, special offers and other events.</p>
		<div class="container" style="width:40%">
			<label>
				<input type="text" class="form-input" placeholder="Enter your email">
			</label>
			<button class="button-small secondary">SUBSCRIBE</button>
		</div>
<br>
<br>


	<form role="search" method="get" class="search-form" action="">
		<label>
			<input type="search" class="search-field" placeholder="Search …" value="" name="s">
		</label>
		<input type="submit" class="search-submit" value="Search">
	</form>

	<?php include "parts/footer.php" ?>
</body>
</html>