
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Cart</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="padding-left: 20px">
			<ul>
				<li><a href="product_list.php"><h5>Back to the store</h5></a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card flat">
				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
				<br>
				<!-- <div class="card-section"> -->
					<a href="product_checkout.php" class="form-button confirm">CHECKOUT</a>
				<!-- </div> -->
			</div>
		</div>

	</div>


	
</body>
</html>