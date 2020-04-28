<?php

include_once "lib/php/functions.php";

print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added to Cart</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<div>
				Thank you for adding to the cart
			</div>

			<div>
				<a class="form-button" href="product_list.php">Continue Shopping</a>
			</div>
		</div>
	</div>
	
</body>
</html>