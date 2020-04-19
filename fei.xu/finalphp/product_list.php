<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";


$rows = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 15
	"
);

// print_p($rows);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<h3>Product List</h3>
		<div class="grid gap">

		<?php



		echo array_reduce(
			$rows,
			'productListTemplate'
		);

		?>


		</div>
	</div>
	
</body>
</html>