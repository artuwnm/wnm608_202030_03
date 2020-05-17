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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collection Page</title>
    <?php include "parts/meta.php" ?>
</head>
<body>

  <?php include "parts/navbar.php" ?>

  <main>
    <div class="home-images">
      <div class="img-container home-img2">
        <div class="hero-text">
          <h1 style="font-size:50px">About Us</h1>
          <h3>Talk to Designers</h3>
          <button class="home-button" onclick="location.href='about.php'" type="button">Explore
          </button>
        </div>
      </div>
     </div> 

    <div class="container">
    <nav class="nav-crumbs" style="margin:1em 0">
      <ul>
        <li><a href="index.php"><i class="fas fa-arrow-left" style="color:black;"></i>Back</a></li>    
      </ul>
    </nav>
    <!-- First Photo Grid-->
    <div class="container">
      <h2 style="text-align:center">Product List</h2>

      <div class="form-control">
        <form class="hotdog light" id="product-search">
          <input type="text" class="search" placeholder="Search Any Products">
        </form>
      </div>

      <div class="form-control display-flex">
        <div class="flex-none">
          <button type="button" class="form-button js-filter" data-type="category" data-value="" onclick="highlight(this)" id="default-button">All</button>
        </div>
        <div class="flex-none">
          <button type="button" class="form-button js-filter" data-type="category" data-value="trending" onclick="highlight(this)">Trending</button>
        </div>
        <div class="flex-none">
          <button type="button" class="form-button js-filter" data-type="category" data-value="seasons" onclick="highlight(this)">Seasons</button>
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
      
    <div class="card soft">
      <a href="admin">Product Admin</a>
    </div>
 </main>

 <?php include "parts/footer.php" ?>
</body>
</html>
  