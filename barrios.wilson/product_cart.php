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
  	<p><img class="logo-footer" src="img/coolkeychains-logo.png" alt="CoolKeychains"></p>
	<h5>Cool Keychains.com ©2020 by Wilson Barrios | MFA-CA | #04389249 </h5>
  </div>
</html>
