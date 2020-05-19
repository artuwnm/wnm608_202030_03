
<?php

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
					<a href="product_checkout_method.php"><h5 class="chaekout-back">< Back to Shipping Method</h5></a>

					<p><span style="color:var(--color-neutral-medium); padding-right: 1em;">Contact</span>jennifergreen@gmail.com</p>
					<p><span style="color:var(--color-neutral-medium); padding-right: 1em;">Ship to</span>Jennifer, San Francisco CA 94102, United States</p>
					<p><span style="color:var(--color-neutral-medium); padding-right: 1em;">Method</span>Free | UPS Ground</p>
<br>
					<h3>Payment</h3>
					<!-- <p class="small-text">All transactions are secure and encrypted.</p> -->
						<div class="form-control">
							<label class="form-label">Card Number</label>
							<input type="text" class="form-input" placeholder="Card number">
						</div>
						<div class="form-control">
							<label class="form-label">Name on Card</label>
							<input type="text" class="form-input" placeholder="Name on card">
						</div>
						
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<label class="form-label">Expiration Date</label>
								<input type="text" class="form-input" placeholder="MM/YY">
							</div>
							<div class="col-xs-12 col-md-6">
								<label class="form-label">CVV</label>
								<input type="text" class="form-input" placeholder="CVV">
							</div>
						</div>
<br>
					<h3>Billing Address</h3>
					<div class="form-control">
						<p>Select the address that matches your payment method.</p>
						<ul>
							<li>
							<input type="radio" id="s-option" name="selector">
							<label for="s-option">Same as shipping address</label>
							<div class="check"></div>
							</li>

							<li>
							<input type="radio" id="d-option" name="selector">
							<label for="d-option">Different billing address</label>
							<div class="check"><div class="inside"></div></div>
							</li>
						</ul>
					</div>
<br>
						<a href="product_confirmation.php" class="form-button confirm">Complete Order</a>

						<!-- <a href="product_checkout_method.php" class="display-flex flex-align-center flex-justify-center"><h5>Back to Shipping Method</h5></a> -->
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
	
</body>
</html>