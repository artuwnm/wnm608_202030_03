<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);


$o = getRows(makeConn(),
	"SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Added to Cart-24 SOLAR TERMS</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

		<div class="cardblue">
			<h2 class="bigtitle">Successfully Added</h2>
			
		</div>

	<div class="container">
		

			<div style="margin-bottom:60px;">
				<p style="text-align:center;">Thank you for adding <?= $_GET['amount'] ?> of the <?= $o->title ?> to the cart.</p>
			</div>

			<nav class="nav-flex">
				<ul>
					<li class="flex-none" style="display: inline;float:left;">
						<a href="product_item.php?id=<?= $o->id ?>">Back to the <?= $o->title ?></a>
					</li>
					
					<li class="flex-none" style="display: inline;float:right;">
						<a class="form-button"  href="product_list.php">Continue Shopping</a>
					</li>
				</ul>
			</nav>
		
	</div>
	
</body>
</html>