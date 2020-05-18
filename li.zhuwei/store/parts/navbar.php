<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


function get_cart_items() {
  $numItems = count(getCartItems());
  if ($numItems > 0) {
    echo "($numItems)";
  }
}

?>


<header class="navbar" style="background-color: #283b54; color:white;">
  <div class="container display-flex">
    <div class="flex-stretch" onclick="window.location.replace('./index.php');">
      <!-- <h1>JAN STUDIO</h1> -->
      <div class="logo">
      <img class="logoimg" src="img/JanStudio.png" alt="JANSTUDIO">
      </div>
    </div>
    <nav class="nav-pills">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="collection.php">Collection</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="login.php">Log In <i class='far fa-address-book' style='color:#f3cfd5'></i></i></a></li>
          <a href="bag.php">
            <span>Bag</span>
            <span class="badge"><?php get_cart_items() ?></span>
            <i class="fas fa-shopping-bag"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>






			