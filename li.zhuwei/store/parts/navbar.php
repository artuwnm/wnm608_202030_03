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

<style>
  .navbar {
    z-index: 100;
/*    background-color: rgba(48, 71, 101);
*/  color:var(--color-neutral-light);
    line-height: var(--header-height);
    background-image: linear-gradient(to right, rgba(48, 71, 101, 0.5), rgba(48, 71, 101, 1), rgba(48, 71, 101, 1));
    height: 65px;
  }
  .logoimg {
    position: absolute;
    width: 75px;
    height:auto;
    background-color: rgba(48, 71, 101);
    padding-right: 6px;
    padding-left: 6px;
    border-radius: 5px;
  }
</style>
<header class="navbar">
  <div class="container display-flex">
    <div class="flex-stretch" onclick="window.location.replace('./index.php');">
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
            <i class="fas fa-shopping-bag" style='color:#f3cfd5'></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>






			