<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);

$id = $_GET['id'];

$p = array_find(
	getCart(),
	function($o) use ($id) { return $o->id==$_GET['id']; } );
$o = getRows(makeConn(),
	"SELECT * FROM `Test` WHERE `id` = {$_GET['id']}"
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
			<h2>Product Item</h2>

			<div><span><h3>Thank you for adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.</h3></span></div>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_item.php?id=<?= $o->id ?>" class="btn btn-primary btn-outline">Back to the <?= $o->name ?></a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_list.php" class="btn btn-primary btn-outline">Continue Shopping</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>


	<?php include "parts/footer.php" ?>

<!-- GOTOTOP -->
	<a class="gototop" href="product_added_to_cart.php"><i class="fas fa-arrow-up"></i></a>
	
	
</body>
</html>