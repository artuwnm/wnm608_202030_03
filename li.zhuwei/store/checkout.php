<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout Page</title>
    <?php include "parts/meta.php" ?>
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>
<body>

  <?php include "parts/navbar.php" ?>

  <div class="container">
    <div class="card soft">
      <h2>check out</h2>

      <ul>
        <li><a href="product_item.php?id=1">check out</a></li>
        <li><a href="product_item.php?id=2">check out</a></li>
        <li><a href="product_item.php?id=3">check out</a></li>
        <li><a href="product_item.php?id=4">check out</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card soft">
      <h2>Product Checkout</h2>

      <form class="form">
        Name on Card
        John More Doe
        Credit card number
        1111-2222-3333-4444
        Exp Month
        September
        Exp Year
        2018
        CVV
        352
       
      <h2>Payment Type</h2>
      <div class="form-control">
          <label for="checkout-card-name" class="form-label">Name on Card</label>
          <input type="text" class="form-input" name="checkout-name">
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
          <label for="checkout-card-expirationyear" class="form-label">CVV</label>
          <input type="text" class="form-input" name="checkout-card-expirationyear">
      </div>

        <h2>Billing Address</h2>
         <div class="form-control">
          <label for="checkout-name" class="form-label">Full Name</label>
          <input type="text" class="form-input" name="checkout-name">
        </div>
        <div class="form-control">
          <label for="checkout-email" class="form-label">Email</label>
          <input type="Email" class="form-input" name="checkout-email">
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
          <label for="checkout-zip" class="form-label">Zip Code/label>
          <input type="text" class="form-input" name="checkout-street">
        </div>



        </div>

      </form>

      Billing Address

 Full Name
John M. Doe
 Email
john@example.com
 Address
542 W. 15th Street
 City
New York
State
NY
Zip
10001
Payment

Accepted Cards
   
Name on Card
John More Doe
Credit card number
1111-2222-3333-4444
Exp Month
September
Exp Year
2018
CVV
352

Continue to checkout

      <div>
        <a class="form-button" href="confirmation.php">Confirm Purchase</a>
      </div>
    </div>
  </div>

  <?php include "parts/footer.php" ?>
  
</body>
</html>