<!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Checkout</title>
	<link rel="stylesheet" href="lib/css/storetheme.css">
	
	<?php include __DIR__. "/parts/meta.php" ?>
</head>

<body>

	<div class="container">
		<div class="nav-pills form-control">
			<ul>
				<li><a href="product_cart.php">BACK</a></li>
			</ul>
		</div>

	<div class="container">
		<div class="card soft">
			<h2>Product Checkout</h2>
		</div>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<form class="form">
						<h2>Payment Type</h2>
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

						<h2>Billing Address</h2>
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
					</form>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">

				<div class="card soft">
					<a class="form-button" href="product_confirmation.php">Confirm my purchase</a>
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>