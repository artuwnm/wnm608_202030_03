<?php

// include, require, include_once, require_once
// include  goes on even there's an error
// require stops when there's an error

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
		<div class="card">
			<div>
				Thank you for adding total <strong><?= $p->amount ?></strong> of the <strong><?= $o->name ?></strong> to the cart.
			</div>
			<br>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_list.php" class="button secondary">Continue Shopping</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_cart.php" class="button secondary">Go to Checkout</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</body>
</html>