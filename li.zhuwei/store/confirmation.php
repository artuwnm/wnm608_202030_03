
<?php
session_start();
$_SESSION['cart'] = [];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Page</title>
    <?php include "parts/meta.php" ?>
</head>
<body>

  <?php include "parts/navbar.php" ?>

  <div class="container">
    <div class="card soft">
      <h2>Product Confirmation</h2>

      <div>
        <p>Thank you for your order!<p>
        <p>A confirmation as been sent to your email.<p>

      </div>

      <div>
        <a class="form-button" href="collection.php">Continue Shopping</a>
      </div>
    </div>
  </div>

  <?php include "parts/footer.php" ?>
  
</body>
</html>