<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>
			<div>
				<ul>
					<li><a href="product_item.php?id=1">Product 1</a></li>
					<li><a href="product_item.php?id=2">Product 2</a></li>
					<li><a href="product_item.php?id=3">Product 3</a></li>
			</div>

			<?php

			$rows = getRows(
				makeConn(),
				"SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				"
			); // ` use for names of things

			echo array_reduce(
				$rows,
				'productListTemplate'
			);


			?>
		
		</div>
	</div>

</body>
</html>