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

<script>

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function showHideHamburger() {
  var topnav = document.getElementById("myTopnav");
  if (topnav.className === "nav-pills topnav") {
    topnav.className = "topnav responsive";
  } else {
    topnav.className = "nav-pills topnav";
  }
}

</script>

<header class="navbar">
  <div class="display-flex">
    <nav class="nav-pills topnav" id="myTopnav">
      <ul>
        <li>
          <img id="nav-logo" src="img/JanStudio.png" alt="JANSTUDIO">
        </li>
        <li><a href="index.php">Home</a></li>
        <li><a href="collection.php">Collection</a></li>
        <li><a href="about.php">About</a></li>
        <li>
          <a href="login.php">Log In
            <i class='far fa-address-book' style='color:#f3cfd5'></i>
          </a>
        </li>
        <li>
          <a href="bag.php">
            <span>Bag</span>
            <span class="badge"><?php get_cart_items() ?></span>
            <i class="fas fa-shopping-bag" style='color:#f3cfd5'></i>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);" class="hamburger" onclick="showHideHamburger()">
            <i class="fa fa-bars"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>






			