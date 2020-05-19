<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Checkout</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a class="form-button back" href="product_cart.php">< Back to cart</a></li>
			</ul>
		</nav>

		<form class="form" method="post" action="product_confirmation.php">
			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<div class="card flat">
						<h2>Payment Method</h2>
						<div class="form-control">
							<label for="checkout-card-name" class="form-label">Name On Card</label>
							<input type="text" class="form-input" name="checkout-card-name">
						</div>
						<div class="form-control">
							<label for="checkout-card-number" class="form-label">Credit Card Number</label>
							<input type="text" class="form-input" name="checkout-card-number">
						</div>
						<div class="form-control">
							<label for="checkout-card-expirationmonth" class="form-label">Expiration Month</label>
							<input type="text" class="form-input" name="checkout-card-expirationmonth">
						</div>
						<div class="form-control">
							<label for="checkout-card-expirationyear" class="form-label">Expiration Year</label>
							<input type="text" class="form-input" name="checkout-card-expirationyear">
						</div>
						<div class="form-control">
							<label for="checkout-card-cvv" class="form-label">CVV</label>
							<input type="text" class="form-input" name="checkout-card-cvv">
						</div>
					</div>
				</div>
			
				<div class="col-xs-12 col-md-4">
					<div class="card flat">
						<h2>Billing Information</h2>
						<div class="form-control">
							<label for="checkout-name" class="form-label">Full Name</label>
							<input type="text" class="form-input" name="checkout-name">
						</div>
						<div class="form-control">
							<label for="checkout-email" class="form-label">Email</label>
							<input type="email" class="form-input" name="checkout-email">
						</div>
						<div class="form-control">
							<label for="checkout-street" class="form-label">Street</label>
							<input type="text" class="form-input" name="checkout-street">
						</div>
						<div class="form-control">
							<label for="checkout-city" class="form-label">City</label>
							<input type="text" class="form-input" name="checkout-city">
						</div>
						<div class="form-control">
							<label for="checkout-state" class="form-label">State</label>
							<input type="text" class="form-input" name="checkout-state">
						</div>
						<div class="form-control">
							<label for="checkout-zip" class="form-label">Zip Code</label>
							<input type="text" class="form-input" name="checkout-zip">
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="col-xs-12 col-md-8">
						<div class="card flat">
							<?php
							echo array_reduce($cartItems, 'checkoutListTemplate');
							?>
						</div>
					</div>
					<div class="col-xs-12 col-md-8">
						<div class="card flat">
							<?= cartTotals('<div class="card-section">
								<input type="submit" class="form-button confirm" id="confirm_purchase" value="Confirm Purchase">
							</div>') ?>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>