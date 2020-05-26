<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout Page</title>
    <?php include "parts/meta.php" ?>
<body>

  <?php include "parts/navbar.php" ?>

  <div class="container">
    <div class="card">
      <div class="container">
    <nav class="nav-crumbs" style="margin:1em 0">
      <ul>
        <li><a href="collection.php"><i class="fas fa-arrow-left" style="color:black;"></i>Back to My Cart</a></li>    
      </ul>
    </nav>

      <h2 style="text-align:center">Payment</h2>
      <label for="fname">Accepted Cards</label>
      <div class="icon-container">
        <i class="fa fa-cc-visa" style="color:navy;"></i>
        <i class="fa fa-cc-amex" style="color:blue;"></i>
        <i class="fa fa-cc-mastercard" style="color:red;"></i>
        <i class="fa fa-cc-discover" style="color:orange;"></i>
        <i class="fab fa-alipay" style="color:black;"></i>
        <i class="fab fa-apple-pay" style="color:black;"></i>
      </div>
      <div class="form-control">
          <label for="checkout-card-name" class="form-label">Name on Card</label>
          <input type="text" class="form-input" name="checkout-name" placeholder="Zhuwei Li">
      </div>

      <div class="form-control">
          <label for="checkout-card-number" class="form-label">Credit Card Number</label>
          <input type="text" class="form-input" name="checkout-card-number" placeholder="1111-2222-3333-4444">
      </div>

      <div class="form-control">
        <label for="checkout-card-expirationmonth" class="form-label">Expiration Month</label>
        <input type="text" class="form-input" name="checkout-card-expirationmonth" placeholder="May">
      </div>

      <div class="form-control">
        <label for="checkout-card-expirationyear" class="form-label">Expiration Year</label>
        <input type="text" class="form-input" name="checkout-card-expirationyear" placeholder="2020">
      </div>

      <div class="form-control">
        <label for="checkout-card-expirationyear" class="form-label">CVV</label>
        <input type="text" class="form-input" name="checkout-card-expirationyear" placeholder="123">
      </div>

      <h2 style="text-align:center">Billing Address</h2>

      <div class="form-control">
        <label for="checkout-name" class="form-label">Full Name</label>
        <input type="text" class="form-input" name="checkout-name" placeholder="Zhuwei Li">
      </div>

      <div class="form-control">
        <label for="checkout-email" class="form-label">Email</label>
        <input type="Email" class="form-input" name="checkout-email" placeholder="example@gmail.com">
      </div>

      <div class="form-control">
        <label for="checkout-street" class="form-label">Street</label>
        <input type="text" class="form-input" name="checkout-street" placeholder="123 Brighton Ave">
      </div>

      <div class="form-control">
        <label for="checkout-city" class="form-label">City</label>
        <input type="text" class="form-input" name="checkout-city" placeholder="San Francisco">
      </div>

      <div class="form-control">
        <label for="checkout-state" class="form-label">State</label>
        <input type="text" class="form-input" name="checkout-state" placeholder="California">
      </div>
      
       <div class="form-control">
        <label for="checkout-zip" class="form-label">Zip Code/label></label>
        <input type="text" class="form-input" name="checkout-street" placeholder="94012">
      </div>

      <div class="col-8">
        <div class="card soft">
        <h2 style="text-align:center">Shipping Method</h2>
        <p style="text-align:center">It may take a few more days to process and deliver your order due to enhanced safety measures implemented by JANSTUDIO and our shipping partners to protect our employees and community.<br>
        <br>Please select your state or province to view available shipping methods.</p>
      </div>
    </div>


   <div class="container">
      <div class="card">
        <a class="form-button" href="confirmation.php">Place Order</a>
      </div>
  </div>

      </form>
    </div>
  </div>
</div>

  <?php include "parts/footer.php" ?>
  
</body>
</html>