<?php

include_once "lib/php/functions.php";

$p = array_find(
			getCart(),
			function($o){ return $o->id==$_GET['id']; }
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
			<h6 class="product-title">SUCCESS</h6>
			<div class="nav-line"></div>
			<div>
				<span>Thank you for adding "<?= $p->amount ?>"" of the "<?= $o->title ?>" to the cart.
				</span>
			</div>
		</div>
	</div>	
<div class="container">
			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_item.php?id=<?= $o->id ?>">Back</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_list.php">CONTINUE SHOPPING</a>
					</li>
				</ul>
			</nav>
	</div>
	
</body>
</html>