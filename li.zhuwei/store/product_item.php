<?php

// include, require, include_once, require_once
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$data = getRows(
  makePDOConn(),
  "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'"
  );
$randomProduct = $data[0];  
$images = explode(",",$randomProduct->images);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Items</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
  <?php include "parts/navbar.php" ?>

  <main>
    <div class="container">
      <nav class="nav-crumbs" style="margin:1em 0">
        <ul>
          <li><a href="collection.php"><i class="fas fa-arrow-left" style="color:black;"></i>Back</a></li>    
        </ul>
      </nav>

      <div class="grid gap">
        <div class="col-xs-12 col-md-7">
          <div class="card soft">
            <div class="product-main">
              <img src="<?= $randomProduct->thumbnail ?>" alt="">
            </div>
            <!-- <div class="product-thumbs">
            <?=
            array_reduce($images,function($r, $image){
              return $r."<img src='/images'>";
            })
            ?>
            </div> -->
          </div>
        </div>

        <div class="col-xs-12 col-md-5">
          <form class="card soft flat" method="get" action="data/form_actions.php">
            <div class="card-section">
              <h2><?= $randomProduct->name ?></h2>
              <div class="product-description">
                <div class="product-price">&dollar;<?= $randomProduct->price ?></div>
              </div>
            </div>

            <div class="card-section">
              <label class="form-label">Amount</label>
              <select name="amount" class="form-input">
                <!-- option*10>{$} -->
                <option >1</option>
                <option >2</option>
                <option >3</option>
                <option >4</option>
                <option >5</option>
                <option >6</option>
                <option >7</option>
                <option >8</option>
                <option >9</option>
                <option >10</option>
              </select>
            </div>

            <div class="card-section">
              <input type="hidden" name="action" value="add-to-cart">
              <input type="hidden" name="id" value="<?= $randomProduct->id ?>">
              <input type="hidden" name="price" value="<?= $randomProduct->price ?>">
              <input type="submit" class="form-button" value="Add">
            </div>
          </form>
        </div>
      </div>

      <div class="card soft dark">
        <h2>Description</h2>
        <div class=DescriptionText><?= $randomProduct->description ?></div>
      </div>
    </div>

    <!-- <div class="container">
      <div class="card soft">
        <h2>Product Item</h2>
        <div>
          The item is <?= $_GET['id'] ?>
        </div>
      </div>
    </div> -->

    <div class="container">
      <h2>Recommended Products</h2>
      <?php recommendedSimilar($randomProduct->category, $randomProduct->id) ?>
    </div>
  </main>

  <?php include "parts/footer.php" ?>
  
</body>
</html>