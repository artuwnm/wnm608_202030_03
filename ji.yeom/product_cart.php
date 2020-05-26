
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
		<div style="padding-left: 20px">
			<a href="product_list.php"><h5>< Back to Shop</h5></a>
		</div>
<!-- 		<nav class="nav-crumbs" style="padding-left: 20px">
			<ul>
				<li><a href="product_list.php"><h5>Back</h5></a></li>
			</ul>
		</nav> -->

		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card flat">
				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="card light flat">
					<?= cartTotals() ?>
				</div>
				<br>
				<a href="product_checkout.php" class="form-button primary">CHECKOUT</a>
			</div>
		</div>

	</div>
	
<footer style="line-height: var(--header-height);"></footer>

</body>
</html>