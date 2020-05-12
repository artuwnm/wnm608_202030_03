<?php

session_start();

include_once "lib/php/functions.php";

$p = array_find(
	getCart(),
	function($o) { return $o->id == $_GET['id']; }
);

$o = getRows(makePDOConn(),
	"SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

print_p([$_SESSION,$o,$p]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added to Cart</title>
	
	<?php include "parts/meta.php" ?>
	<link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="css/storetheme.css">
    <script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
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
						<a href="product_item.php?id=<?= $o->id ?>">Back to the <?= $o->name ?></a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="collection.php">Continue Shopping</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	
</body>
</html>