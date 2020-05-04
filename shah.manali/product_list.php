
<?php

include "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

  <?php include "parts/navbar.php" ?>


	
		<div class="container">

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
				"SELECT * FROM products"
			);

			print_p($rows);

			?>

	</div>
	</div>

</body>
</html>