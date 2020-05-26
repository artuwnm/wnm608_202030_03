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

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<h1>Shopping Cart</h1>
			</div>

			<div class="col-xs-12 col-md-4 display-flex flex-align-center">
				<a href="product_list.php" class="form-button confirm_1">CONTINUE SHOPPING</a>
			</div>
		</div>

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
					<div class="card-section">
						<a href="product_checkout.php" class="form-button confirm">CHECKOUT</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>