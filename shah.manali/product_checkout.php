<?php


include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";
$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Checkout</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<div class="card soft4">

		<br>

	<div class="row">
 	 <div class="col-75">
    	<div class="container9">
      
      <form action="product_confirmation.php">
		<div class="row">
          <div class="col-50">

            <p class="billingaddress">Billing Address</p>
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Fei Xu">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="asherrfei@gmail.com">

            <label for="adr">Address</label>
            <input type="text" id="adr" name="address" placeholder="23th Street">

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>

              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>

            </div>
          </div>

          <div class="col-50">
            <p>Payment</p>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Fei Xu">

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2020">
              </div>

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>

          </div>
        </div>

        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>

        <br>
        <br>
        <input type="submit" value="Continue to checkout" class="form-button7">
      </form>
    </div>
  </div>

	<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<?= cartTotals() ?>
				</div>
			</div>

		</div>
	</div>
	  </div>