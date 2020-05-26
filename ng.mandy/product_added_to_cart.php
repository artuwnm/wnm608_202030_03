<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// print_p($_SESSION);
$o = getRows(makeConn(),
	"SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added to Cart</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card flat">
			<h2>Product Added</h2>

			<div>
				Thank you for adding <?= $_GET['amount'] ?> of the <strong><?= $o->title ?></strong> to the cart.</br></br>
			</div>

			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<div class="card flat">
						<a class="form-button confirm_1" href="product_cart.php">View Cart</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="card flat">
						<a class="form-button confirm" href="product_list.php">Continue Shopping</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>