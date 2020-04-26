<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product List</title>
	
	<?php include __DIR__. "/parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>

			<?php

			$rows = getRows(
				makeConn(),
				"SELECT
				`title`,`price`
				FROM `products`
				ORDER BY `date_create` DESC
				limit 12
				"
			);

			echo array_reduce(
				$rows,
				'productListTemplate'
			);

			print_p($rows);

			?>
		</div>
	</div>
	
</body>
</html>