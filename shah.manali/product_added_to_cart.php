<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);
$p = array_find(
	getCart(),
	function($o) { return $o->id==$_GET['id']; }
);
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
		<div class="card soft">
			<h2>Product Item</h2>

			<div>
				Thank you for adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.
			</div>

            <nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a class="form-button confirm" href="product_cart.php">Go to cart</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
	
				<a class="form-button confirm" href="product_list.php">Continue Shopping</a>
			</div>
		</div>
	</div>
	
</body>
</html>