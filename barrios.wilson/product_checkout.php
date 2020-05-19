<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Checkout</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar-checkout.php" ?>

	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">Checkout Page</div>
			</div>
	</header>
	<div class="banner-color-yellow2">

	<div class="container">
		<div class="nav-crumbs form-control">
			<ul>
				<li><a href="product_cart.php"><img class="arrow" src="https://wbarrios.com/aau/wnm608/barrios.wilson/img/back.png" alt="Back"> BACK</a></li>
			</ul>
		</div>

<div class="card soft2">
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
					
						<h6>Billing Address</h6>
						<div class="form-control">
							<label for="name" class="form-label">Full name</label>
							<input type="text" class="form-input" name="name">
						</div>
						<div class="form-control">
							<label for="e-mail" class="form-label">E-mail</label>
							<input type="text" class="form-input" name="checkout-e-mail">
						</div>
						<div class="form-control">
							<label for="address" class="form-label">Address</label>
							<input type="text" class="form-input" name="checkout-address">
						</div>
						<div class="form-control">
							<label for="city" class="form-label">City</label>
							<input type="text" class="form-input" name="checkout-city">
						</div>
						<div class="form-control">
							<label for="checkout-card-cvv" class="form-label">State </label>
							<input type="text" class="form-input" name="checkout-state">
						</div>
						<div class="form-control">
							<label for="checkout-card-cvv" class="form-label">Zip Code</label>
							<input type="text" class="form-input" name="checkout-zipcode">
						</div>

					</div>

			<div class="col-xs-12 col-md-4">
				
					<form class="form">

						<h6>Credit Card Information</h6>
					
							<label for="fname">Accepted Cards</label>
            					<div class="icon-container">
              					<i class="fa fa-cc-visa" style="color:navy;"></i>
              					<i class="fa fa-cc-amex" style="color:blue;"></i>
              					<i class="fa fa-cc-mastercard" style="color:red;"></i>
              					<i class="fa fa-cc-discover" style="color:orange;"></i>
            					</div>
            				
            				<div class="form-control">
							<label for="name" class="form-label">Name on the card</label>
							<input type="text" class="form-input" name="name on the card">
							</div>

							<div class="form-control">
							<label for="credit card number" class="form-label">Credit card number</label>
							<input type="text" class="form-input" name="checkout-creditcard">
							</div>

							<div class="form-control">
							<label for="address" class="form-label">Exp Month</label>
							<input type="text" class="form-input" name="checkout-expmonth">
							</div>

							<div class="form-control">
							<label for="city" class="form-label">Exp Year</label>
							<input type="text" class="form-input" name="checkout-exp year">
							</div>

							<div class="form-control">
							<label for="checkout-card-cvv" class="form-label">CCV</label>
							<input type="text" class="form-input" name="checkout-ccv">
							</div>
							<br>
							<br>


							<a class="form-button green-conf" href="product_confirmation.php">Confirm Purchase</a>

						</form>
					
						</div>		
					

				<div class="col-xs-12 col-md-4">
				
					<form class="form">
						<h6>Additional Information</h6>

							<label for="message"  class="form-label">Message</label>
							<input type="text area" class="form-input" name="message" style="height: 150px;">
					</form>
				
			</div>
		</div>
	</div>

	

	<?php include "parts/footer.php" ?>
	
</body>
</html>