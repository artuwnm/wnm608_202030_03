<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>coriq_shop</title>
	<link rel="stylesheet" href="../../public/css/gridsystem.css">
	<link rel="stylesheet" href="../../public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php include "../parts/menu-shop.php" ?>

		<div class="img-container grid grid-gap-sm">
			<!-- <div class="nav-breadcrumb col-xl-12 col-md-12 col-sm-12 col-12">
				<a href="index.html" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Home</a>
				<span class="nav-breadcrumb-separator"></span>
		        <a href="shop" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Shop</a>
		        <span class="nav-breadcrumb-separator"></span>
		        <a href="/shop/photo-print-24x36" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0" id="yui_3_17_2_1_1583268160447_1311">Print</a>
     		</div> -->
			<div class="checkout-info-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<form action="" method="get" class="form-example">
				  	<div class="checkout-form-section">
					    <label for="email">Your Email</label>
					    <input type="email" name="email" id="email" required>
				 	</div>
				 	<div class="checkout-form-section grid grid-gap-xs">
					    <label for="shipping" class="col-12">Shipping</label>
					    <!-- <input type="shipping" name="shipping" id="shipping" required> -->

					    <input name="fname" autocomplete="shipping first-name given-name" class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12" data-test="first-name" maxlength="50" placeholder="First Name" type="text" value="">
					    <input name="fname" autocomplete="shipping last-name family-name" class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12" data-test="first-name" maxlength="50" placeholder="Last Name" type="text" value="">
					    <input name="street-address address-line1" autocomplete="shipping street-address address-line1" class="col-12" data-test="line1" maxlength="70" placeholder="Address 1" type="text" value="">
					    <input name="street-address address-line2" autocomplete="shipping street-address address-line2" class="col-12" data-test="line2" maxlength="70" placeholder="Address 2" type="text" value="">
					    <!-- <input type="text"> -->

					    <select name="country" id="" class="col-12">
					    	<option value="">United State</option>
					    </select>
					    <input name="fname" autocomplete="shipping postal-code zip-code zip" class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12" data-test="postal-code" maxlength="50" placeholder="Zip Code" type="text" value="">
					    <input name="address-level2 city" autocomplete="shipping address-level2 city" class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12" data-test="city" maxlength="70" placeholder="City" type="text" value="">

					    <select name="address-level1 region" class="col-12" data-test="region">
					    	<option value="">State</option><option value="AL">AL</option><option value="AK">AK</option><option value="AZ">AZ</option><option value="AR">AR</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DE">DE</option><option value="DC">DC</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="IA">IA</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="ME">ME</option><option value="MD">MD</option><option value="MA">MA</option><option value="MI">MI</option><option value="MN">MN</option><option value="MS">MS</option><option value="MO">MO</option><option value="MT">MT</option><option value="NE">NE</option><option value="NV">NV</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NY">NY</option><option value="NC">NC</option><option value="ND">ND</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VT">VT</option><option value="VA">VA</option><option value="WA">WA</option><option value="WV">WV</option><option value="WI">WI</option><option value="WY">WY</option><option value="AA">AA</option><option value="AE">AE</option><option value="AP">AP</option>
					    </select>
					    <input autocomplete="tel" class="col-12" data-test="phone-number" maxlength="50" placeholder="Phone Number" type="tel" value="">


				 	</div>
				 	<div class="checkout-form-section">
					    <label for="payment">Payment</label>
					    <input type="payment" name="payment" id="payment" required>
				 	</div>
				 	<div class="checkout-form-section">
					    <label for="purchase">Review & Purchase</label>
					    <input type="purchase" name="purchase" id="purchase" required>
				 	</div>
				 	<!-- <div class="checkout-form-section">
				    	<input type="submit" value="Subscribe!">
				 	</div> -->
				</form>
			</div>


			<?php 
				include_once "form_actions.php";
				foreach ($cart as $i=>$currentItem) {

					$currentSize = $currentItem->size;
					$price = $sizeTemplate->$currentSize->_price; 
					$quantity = $currentItem->quantity;
					$subTotal =$subTotal+$price*$quantity;
					$orderTax = number_format($subTotal*0.0725,2,'.','');
					$orderTotal = $subTotal+$orderTax;
								
				}
								
	
							 

			 ?>
			<div class="checkout-info-summary col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<div class="checkout-form-section">
					<h3>Order Summary</h3>
					<div class="">
						<img src="" alt="">
					</div>
					<div>
						<div class="checkout-total-container">
							<div class="grid">
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Subtotal</span>
									<span class="checkout-value"><?php echo'$' . $subTotal; ?></span>
								</div>
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Tax</span>
									<span class="checkout-value"><?php echo'$' . $orderTax; ?></span>
								</div>
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Shipping</span>
									<span class="checkout-value">--</span>
								</div>
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Order Total</span>
									<span class="checkout-value"><?php echo'$' . $orderTotal; ?></span>
								</div>
							</div>
						</div>
					</div>
					<form method="post" action="form_actions.php">
						<button type="submit" class="btn btn-add-bag-xl" data-test="button" name="checkout">Confirm Purchase</button>
					</form>
					
				</div>
			</div>
			
		</div>
		
	</div>



	<script src="../../public/js/util.js"></script>
	<script src="../../public/js/function.js"></script>	
	
</body>
</html>