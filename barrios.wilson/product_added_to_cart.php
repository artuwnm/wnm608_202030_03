<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);
$p = array_find(
	getCart(),
	function($o) use ($id) { return $o->id==$_GET['id']; }
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

	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">Product Item</div>
			</div>
	</header>

	<div class="container">

		<div class="thankyoupic"><img src="img/thankyou.png"></div>
		
		<div class="card soft">
			


			<div class="thankyou">
				For adding <?= $p->amount ?> of the <?= $o->name ?> to the cart.
			</div>
		</div>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_item.php?id=<?= $o->id ?>"><img class="arrow" src="img/back.png" alt="Back"> Back to the <?= $o->name ?></a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_list.php">Continue Shopping <img class="arrow" src="img/store.png" alt="store"></a>
					</li>
				</ul>
			</nav>
			<br>
			<br>
		</div>
	</div>
    
	<?php include "parts/footer.php" ?>
</body>
</html>

