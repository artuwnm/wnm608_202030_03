<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$rows = getRows(
  makePDOConn(),
  "SELECT *
  FROM `products`
  ORDER BY `date_create` DESC
  LIMIT 12
  "
);

// print_p($rows);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collection Page</title>
    <?php include "parts/meta.php" ?>
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <script type="text/javascript" src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="lib/js/functions.js"></script>
    <script type="text/javascript" src="js/templates.js"></script>
    <script type="text/javascript" src="js/list.js"></script>
    <script type="text/javascript" src="js/products.js"></script>
</head>
<body>

  <?php include "parts/navbar.php" ?>

  <main>
    <!-- First Photo Grid-->
    <div class="container">
      <h3>Product List</h3>

      <div class="form-control">
        <form class="hotdog light" id="product-search">
          <input type="search" class="search" placeholder="Search Products">
        </form>
      </div>

      <div class="form-control display-flex">
        <div class="flex-none">
          <button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
        </div>
        <div class="flex-none">
          <button type="button" class="form-button js-filter" data-type="category" data-value="trending">Trending</button>
        </div>
        <div class="flex-none">
          <button type="button" class="form-button js-filter" data-type="category" data-value="seasons">Seasons</button>
        </div>
      </div>
      <div class="form-control">
        <!-- .form-select>select>option -->
        <div class="form-select">
          <select class="js-sort">
            <option value="1">Lasted arrivals</option>
            <option value="2">Price:Low to high </option>
            <option value="3">Price:High to Low</option>
          </select>
        </div>
      </div>

      <div class="grid gap productlist"></div>
    </div>
      
    <div>
      <a href="admin">Product Admin</a>
    </div>
 </main>

 <?php include "parts/footer.php" ?>
</body>
</html>
  