<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";
$cartItems = getCartItems();
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Cart</title>
	
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>
	<h2>Shopping Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card soft">

				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<?= cartTotals() ?>
					<br>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button1">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>