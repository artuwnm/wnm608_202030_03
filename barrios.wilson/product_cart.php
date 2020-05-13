<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Cart</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<header class="pagename">
		<div class="container display-flex pagename">Product Cart</div>
			</div>
	</header>

	<div class="container">

		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php"><img class="arrow" src="img/back.png" alt="Back"> Back</a></li>
			</ul>
		</nav>


		<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card flat">
					<?php
					echo array_reduce($cartItems,'cartListTemplate');
					?>
					</div>
				</div>


				<div class="col-xs-12 col-md-5">
					<div class="card flat">
					<?= cartTotals() ?>
						<div class="card-section">
						<a href="product_checkout.php" class="form-button red">Checkout</a>
						</div>
					</div>
				</div>
		</div>

	</div>

</body>



<div class="footer">

	<div class="grid gap">
			<div class="col-xs-12 col-md-6">

  				<img class="logo-footer" src="img/coolkeychains-logo.png" alt="CoolKeychains">
  				<div class="vl"></div>
  			</div>
  
			<div class="col-xs-12 col-md-6">

				<div class="social-container">
    				<ul class="social-icons">
        			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
        			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    				</ul>
				</div>
  			</div>

	</div>

<div class="footer-buttom"><p>Cool Keychains.com ©2020 by Wilson Barrios | MFA-CA | #04389249</p></div>
</html>
