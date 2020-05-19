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
</head>
<body>
  <?php include "parts/navbar.php" ?>
  <main>
    <div class="container">
      <div class="card flat">
        <nav class="nav-crumbs" style="">
          <ul>
            <li><a href="collection.php"><i class="fas fa-arrow-left" style="color:black;"></i> Back to products</a></li>    
          </ul>
        </nav>
      </div>
<?php
if (empty($cartItems)) {
echo <<<HTML
<div class="card flat">
  <h2>Your cart is empty.</h2>
</div>
HTML;
} else {
echo array_reduce($cartItems,'cartListTemplate');
echo <<<HTML
<div class="card flat">
HTML;
echo cartTotals();
echo <<<HTML
  <div class="card-section" style="border-top:0px;">
    <a href="checkout.php" class="form-button confirm">Checkout</a>
  </div>
</div>
HTML;
}
?>
    </div>
  </main>
  
  <?php include "parts/footer.php" ?>

</body>

</html>