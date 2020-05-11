  <?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$rows = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
);



?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Paintbox list</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>




		<div class="container">
			<h3 class="bigtitle">Product</h3>
			
		</div>


	<div class="container">

		<div class="grid gap">

		<?php



		echo array_reduce(
			$rows,
			'productListTemplate'
		);

		?>


		</div>

	</div>



	<?php include "parts/footer.php" ?>



	
</body>
</html>

