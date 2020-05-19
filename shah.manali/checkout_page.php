<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title>Store: Product Checkout</title>
    <style>
    .arrow {
  border: solid grey;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

  </style>
	
	<?php include "parts/meta.php" ?>
</head>
<body>



	<div class="container">

<nav class="nav-flex flex-none">
  <ul>
    <li class="flex-none"><a href="product_cart.php"> <i class="arrow left"></i> Back to cart</a></li>
  </ul>
</nav>


		<div class="card">
			
			<div class="row">
  <div class="col-75">
    <div class="container">

 
			<br>

      <div class="grid gap">
			<div class="col-xs-12 col-md-6">
            <h3>Billing Address</h3>
            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Manali Shah">
            <label for="email"> Email</label>
            <input type="text" id="email" name="email" placeholder="manalishah@gmail.com">>
            <label for="adr"> Address</label>
            <input type="text" id="adr" name="address" placeholder="S main st">
            <label for="city"> City</label>
            <input type="text" id="city" name="city" placeholder="Milpitas">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="CA">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="95035">
              </div>
            </div>
          </div>
        
			<div class="col-xs-12 col-md-6">
            <h3>Payment</h3>
            
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Manali Shah">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111 1111 1111 1111">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="January">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
              </div>
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



<?php include "parts/footer.php" ?>


</body>
</html>



