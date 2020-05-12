<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout-24 SOLAR TERMS</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<div class="container">
		<div class="nav-pills form-control">
			<ul>
				<li><a href="product_cart.php">back</a></li>
			</ul>
		</div>

		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card soft">
					<form class="form">
						<h2>Payment Type</h2>
						

                        <div class="form-control">
				            <label class="form-label" for="input-example1">First Name</label>
				            <input type="text1" class="form-input"  id="input-example1">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">Last Name</label>
				            <input type="text1" class="form-input"  id="input-example2">
			            </div>

                        <div class="form-control">
				            <label class="form-label" for="input-example1">Card Number</label>
				            <input type="text1" class="form-input" placeholder="0000-0000-0000-0000" id="input-example3">
			            </div>


                        <div class="form-control">
				            <label class="form-label" for="input-example1">Expiration Month</label>
				            <input type="text1" class="form-input" placeholder="mm" id="input-example4">
			            </div>


                        <div class="form-control">
				            <label class="form-label" for="input-example1">Expiration Year</label>
				            <input type="text1" class="form-input" placeholder="yy" id="input-example5">
			            </div>


                        <div class="form-control">
				            <label class="form-label" for="input-example1">CVV</label>
				            <input type="text1" class="form-input" placeholder="000" id="input-example6">
			            </div>



						<h2>Billing Address</h2>
                        <div class="form-control">
				            <label class="form-label" for="input-example1">First Name</label>
				            <input type="text1" class="form-input" id="input-example7">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">Last Name</label>
				            <input type="text1" class="form-input" id="input-example8">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">Email</label>
				            <input type="text1" class="form-input" id="input-example9">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">Street</label>
				            <input type="text1" class="form-input" id="input-example10">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">City</label>
				            <input type="text1" class="form-input" id="input-example11">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">State</label>
				            <input type="text1" class="form-input" id="input-example12">
			            </div>

			            <div class="form-control">
				            <label class="form-label" for="input-example1">Zip Code</label>
				            <input type="text1" class="form-input" id="input-example13">
			            </div>

					</form>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">

				<div class="card soft">
					<a class="form-button" href="product_confirmation.php">Confirm Purchase</a>
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>