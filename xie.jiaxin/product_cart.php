<?php

include_once "./lib/php/functions.php";
include_once "./parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Cart</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card">
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
				<div class="card flat">
					<div>
						<strong>Sub-Total</strong>
						$3.50
					</div>
					<div>
						<strong>Taxes</strong>
						$3.50
					</div>
					<div>
						<strong>Total</strong>
						$3.50
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>