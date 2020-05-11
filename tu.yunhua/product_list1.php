<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

session_start();
$_SESSION['cart'] = [];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "parts/meta.php" ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<h2>Product List</h2>

		<div class="grid gap">

		<?php

		$rows = getRows(
			makeConn(),
			"SELECT *
			FROM `Test`
			ORDER BY `date_create` DESC
			LIMIT 42
			"
		);

		echo array_reduce(
			$rows,
			'productListTemplate'
		);

		?>


		</div>
	</div>


	<?php include "parts/footer.php" ?>

	<!-- GOTOTOP -->
	<a class="gototop" href="product_list.php"><i class="fas fa-arrow-up"></i></a>


</body>
</html>	

