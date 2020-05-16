<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);

$o = getRows(makeConn(),
	"SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];


$p = array_find(
	getCart(),
	function($o) { return $o->id==$_GET['id']; }
);


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product Added to Cart</title>
	
	<?php include __DIR__."/parts/meta.php" ?>
</head>
<body>

	<?php include __DIR__."/parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Your items</h2>

			<div>
				Thank you for adding <?= $p->amount ?> of the <?= $o->title ?> to the cart.
			</div>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="productitem.php?id=<?= $o->id ?>">Back to the <?= $o->title ?></a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="productlist.php">Continue Shopping</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	
</body>
</html>