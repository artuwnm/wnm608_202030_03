<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Page</title>
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
      <h2>confirmation</h2>

      <ul>
        <li><a href="product_item.php?id=1">confirmation</a></li>
        <li><a href="product_item.php?id=2">confirmation</a></li>
        <li><a href="product_item.php?id=3">confirmation</a></li>
        <li><a href="product_item.php?id=4">confirmation</a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card soft">
      <h2>Product Confirmation</h2>

      <div>
        Thank you for purchasing.
      </div>

      <div>
        <a class="form-button" href="collection.php">Continue Shopping</a>
      </div>
    </div>
  </div>

  <?php include "parts/footer.php" ?>
  
</body>
</html>