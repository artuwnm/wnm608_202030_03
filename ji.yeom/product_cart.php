<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Cart</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs">
			<ul>
				<li><a href="product_list.php"><h5>Back</h5></a></li>
			</ul>
		</nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card">
				<?php
				$data = getRows(
					makeConn(),
					"SELECT * FROM `products` WHERE `id` in (3,5,9) LIMIT 3"
				);
				echo array_reduce($data, 'cartListTemplate');	
				?>
				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<div>
						<strong>Sub-Total</strong>
						$3.50
					</div>
					<div>
						<strong>Taxes</strong>
						$0.50
					</div>
					<div>
						<strong>Total</strong>
						$4.00
					</div>
				</div>
				<a class="button primary" href="product_checkout.php">Checkout</a>
			</div>

		</div>
	</div>
	
</body>
</html>