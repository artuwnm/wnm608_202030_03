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

      <form>
        Checkout form
      </form>

      <div>
        <a class="form-button" href="confirmation.php">Confirm Purchase</a>
      </div>
    </div>
  </div>

  <?php include "parts/footer.php" ?>
  
</body>
</html>