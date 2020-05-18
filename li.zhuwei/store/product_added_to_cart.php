<?php

session_start();

include_once "lib/php/functions.php";

$p = array_find(
  getCart(),
  function($o) { return $o->id == $_GET['id']; }
);

$o = getRows(makePDOConn(),
  "SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

// print_p([$_SESSION,$o,$p]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Store: Product Added to Cart</title>
  
  <?php include "parts/meta.php" ?>
  <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>
<body>

  <?php include "parts/navbar.php" ?>

  <main>
    <div class="container">
      <div style="display: flex; flex-direction: column">
        <div class="card soft">
          <h2>Product Item</h2>
          <div>
            Thank you for adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.
          </div>
          <button class="form-button">
            <a href="product_item.php?id=<?= $o->id ?>">Back to the <?= $o->name ?></a>
          </button>
        </div>

        <div style="display: flex; flex-direction: row; justify-content: space-between;">
          <button class="form-button">
             <a href="collection.php">Continue shopping</a>
          </button>
          <button class="form-button">
             <a href="bag.php">Check out</a>
          </button>
        </div>
      </div>
    </div>
  </main>
  
  <?php include "parts/footer.php" ?>
</body>
</html>