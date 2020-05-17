<?php

session_start();

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Bag Page</title>
  <?php include "parts/meta.php" ?>
  <link rel="stylesheet" href="lib/css/gridsystem.css">
  <link rel="stylesheet" href="lib/css/styleguide.css">
  <link rel="stylesheet" href="css/storetheme.css">
  <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/products.js"></script></head>
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <main>
    <div class="container">
      <div class="card flat">
        <nav class="nav-crumbs" style="margin:2em 4em">
          <ul>
            <li><a href="collection.php"><i class="fas fa-arrow-left" style="color:black;"></i>Back</a></li>    
          </ul>
        </nav>
      </div>
      <div class="card flat">
      <?php
      echo array_reduce($cartItems,'cartListTemplate');
      ?>
      </div>
      <div class="card flat">
        <?= cartTotals() ?>
        <div class="card-section">
          <a href="checkout.php" class="form-button confirm">Checkout</a>
        </div>
      </div>
    </div>
  </main>

<?php include "parts/footer.php" ?>
  
</body>
</html>