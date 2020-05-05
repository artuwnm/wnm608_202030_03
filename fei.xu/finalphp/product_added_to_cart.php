<?php

include_once "../lib/php/functions1.php";


// print_p($_SESSION);


$p = array_find(
	getCart(),
	function($o) { return $o->id==$_GET['id']; }
);
$o = getRows(makeConn(),
	"SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added to Cart</title>
	
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			

			<div>
				<h3>Thank you for adding <?= $p->amount ?> of the <?= $o->name ?> water to the cart.</h3>
			</div>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_item.php?id=<?= $o->id ?>">Back to the <?= $o->name ?> water</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_list.php">Continue Shopping</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	
</body>
</html>