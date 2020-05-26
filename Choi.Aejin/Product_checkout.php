

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHECKOUT</title>
	<?php include "Parts/meta.php" ?>
</head>

<body>
	<?php include "Parts/navbar.php" ?>

	<div class="container">


<nav class="nav-crumbs">
      <ul>
        <li><a href="Product_cart.php"><h4>Back </h4></a></li>
      </ul>
    </nav>



		<div class="grid gap">
        
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <form class="form">
                    <h4>Billing Address</h4>
                    <div class="form-control">
                        <label for="checkout-name" class="form-label">Full Name</label>

                        <input type="text" class="form-input" name="checkout-name">
                    </div>
                   
                    <div class="form-control">
                        <label for="checkout-email" class="form-label">Email</label>
                        <input type="text" class="form-input" name="email">
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


       <div class="col-xs-12 col-md-6">
            <div class="card">
                <form class="form">
                    <h4>Payment Type</h4>
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
                </form>
            </div>
        </div>




<br>
<br>

</div>
			
          <div>
          	<a class="button primary" href="Product_confirmation.php">Confirm Purchase</a>

          </div>
          <br>
    
  </div>
<br>
<br>
<br>






<footer class="footer">
  <div class="container display-flex flex-justify-center">
    <div class="copyright">
      <h1>Abode<br>© 2020 design by Aejin Choi</h1>
    </div>
  </div>
</footer>


</body>
</html>