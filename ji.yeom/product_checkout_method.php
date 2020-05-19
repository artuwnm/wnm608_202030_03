
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
					<a href="product_checkout.php"><h5 class="chaekout-back">< Back to Shipping Address</h5></a>

					<p><span style="color:var(--color-neutral-medium); padding-right: 1em;">Contact</span>jennifergreen@gmail.com</p>
					<p><span style="color:var(--color-neutral-medium); padding-right: 1em;">Ship to</span>Jennifer, San Francisco CA 94102, United States</p>
<br>
					<h3>Shipping Method</h3>
						<div class="form-control">
							<p>Please select one of the shipping methods:</p>
							<ul>
								<li>
								<input type="radio" id="free-option" name="radio">
								<label for="free-option">Free | UPS Ground</label>
								<div class="check"></div>
								</li>

								<li>
								<input type="radio" id="2day-option" name="radio">
								<label for="2day-option">$15 | UPS 2nd Day Air</label>
								<div class="check"><div class="inside"></div></div>
								</li>

								<li>
								<input type="radio" id="nextday-option" name="radio">
								<label for="nextday-option">$25 | UPS Next Day Air</label>
								<div class="check"><div class="inside"></div></div>
								</li>
							</ul>
						</div>
<br>
						<a href="product_checkout_payment.php" class="form-button primary">Continue to Payment</a>

						<!-- <a href="product_checkout.php" class="display-flex flex-align-center flex-justify-center"><h5>Back to Shipping Address</h5></a> -->
					</div>
				</div>

				<div class="col-xs-12 col-md-6 ">
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