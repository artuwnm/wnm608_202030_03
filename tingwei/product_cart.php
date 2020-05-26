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

    <div class="card"></div>
	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card flat">
					<h6 class="product-title">SHOPPINGBAG</h6>
						<div class="nav-line"></div>
				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				<div class="nav-line"></div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<h6 class="product-title">CHECKOUT</h6>
						<div class="nav-line"></div>
					<?= cartTotals() ?>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button_black confirm">CHECKOUT</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>