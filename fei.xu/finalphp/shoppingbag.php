<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";

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
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card">
						<h3>Order Summary</h3>
				<?php
				$data = getRows(
					makeConn(),
					"SELECT * FROM `products` WHERE `id` in (3,5,9)"
				);
				echo array_reduce($data,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft2">
					<div class="subtotal">
						Sub-Total <strong class="price1">$1.99</strong>
					</div>
					<div class="taxes">
						Taxes <strong class="price1">$3.50</strong>
					</div>
						<hr>
					<div class="total">
						<strong>Total</strong><strong class="price1">$3.50</strong>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>