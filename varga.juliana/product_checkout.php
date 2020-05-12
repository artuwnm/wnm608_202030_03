<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title>Store: Product Checkout</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card medium">
			
			<div class="row">
  <div class="col-75">
    <div class="container">

 
			<br>

      <div class="grid gap">
			<div class="col-xs-12 col-md-6">
            <h3>Billing Address</h3>
            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="firstname">
            <label for="email"> Email</label>
            <input type="text" id="email" name="email">
            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address">
            <label for="city"> City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip">
              </div>
            </div>
          </div>
        
			<div class="col-xs-12 col-md-6">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
             </div>
            </div>
          </div>
          
        </div>
        <br>
        <a href="product_confirmation.php" class="form-button confirm"> Continue to checkout</a>
    </div>
  </div>
</div>


		</div>
	</div>
	

	<?php include "parts/footer.php" ?>
	
</body>
</html>