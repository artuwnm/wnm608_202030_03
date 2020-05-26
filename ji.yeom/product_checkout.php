
<?php

// session_start();

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Checkout</title>
	<?php include "parts/meta.php" ?>
</head>

<body>

	<?php include "parts/navbar_checkout.php" ?>

	<div class="container">
		<div style="padding-top: 0">
			<div class="grid gap">

				<div class="col-xs-12 col-md-6">
				<div class="card-section">
					<a href="product_cart.php"><h5 class="chaekout-back">< Back to Cart</h5></a>
					<p>Already have an account? <span style="text-decoration: underline">Login</span></p>
					<input type="text" class="form-input" placeholder="Email">
					<label class="checkbox"><p class="small-text">Keep me up to date on news and exclusive offers</p>
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
<br>
					<h3>Shipping Address</h3>
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label class="form-label">First Name</label>
								<input type="text" class="form-input" placeholder="First Name">
							</div>
							<div class="col-xs-12 col-md-6">
									<label class="form-label">Last Name</label>
									<input type="text" class="form-input" placeholder="Last Name">
							</div>
						</div>

						<div class="form-control">
							<label class="form-label">Address</label>
							<input type="text" class="form-input" placeholder="Address">
						</div>
						
						<div class="grid gap">
							<div class="col-xs-12 col-md-4">
								<label class="form-label">City</label>
								<input type="text" class="form-input" placeholder="City">
							</div>
							<div class="col-xs-12 col-md-4">
								<label class="form-label">State</label>
								<input type="text" class="form-input" placeholder="State">
							</div>
							<div class="col-xs-12 col-md-4">
								<label class="form-label">Zipcode</label>
								<input type="text" class="form-input" placeholder="Zipcode">
							</div>	
						</div>

						<div class="form-control">
							<label class="form-label">Phone</label>
							<input type="tel" class="form-input" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
						</div>

						<a href="product_checkout_method.php" class="form-button primary">Continue to Shipping Method</a>

				</div>
				</div>

				<div class="col-xs-12 col-md-6">
					<div class="card light flat">
						<h3 style="margin: 1em">Your Cart</h3>					
						<?php
						echo array_reduce($cartItems,'checkoutListTemplate');
						?>

						<hr style="border-top: 1px solid white">
						
						<div class="card-section" align="center">
							<div class="display-flex flex-align-center flex-justify-center" >
								<input type="text" class="form-input" style="background-color: #fff" placeholder="Discount Code">
							<div class="flex-none">
								<button type="button" class="form-button third">APPLY</button>
							</div>
							</div>
						</div>

						<hr style="border-top: 1px solid white">

						<div class="card-section">
						<?= cartTotals() ?>
						</div>	
					</div>
				</div>

			</div>
		</div>
	</div>
	
<!-- <footer style="line-height: var(--header-height);"></footer> -->

</body>
</html>