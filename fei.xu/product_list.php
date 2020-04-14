<?php

include "lib/php/functions.php";
include "parts/templates.php";

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

			<div class="grid gap">

			<?php

			$rows = getRows(
				makeConn(),
				"SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 12
				"
			);

			echo array_reduce(
				$rows,
				'productListTemplate'
			);

			?>

			
			</div>
		</div>
	</div>
	
</body>
</html>