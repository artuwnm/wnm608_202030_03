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
		<h2>Product List</h2>

		<div class="grid gap">

		<?php

		$rows = getRows(
			makeConn(),
			"SELECT *
			FROM `Test`
			ORDER BY `date_create` DESC
			LIMIT 21
			"
		);

		echo array_reduce(
			$rows,
			'productListTemplate'
		);

		?>


		</div>
	</div>


	
</body>
</html>	

<?php include "parts/footer.php" ?>

	<!-- GOTOTOP -->
<a class="gototop" href="http://badtrista.com/aau/wnm608/tu.yunhua/product_list.php"><i class="fas fa-arrow-up"></i></a>
