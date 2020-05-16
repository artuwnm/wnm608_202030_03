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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<div class="card ">
			
			<nav class="nav-flex">
				<ul>
					<li class="flex-none pomegranate">
						<a href="product_item.php?id=<?= $o->id ?>">Back to the <?= $o->name ?> Water</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none pomegranate">
						<a href="product_list.php">Continue Shopping</a>
					</li>
				</ul>
			</nav>

			<div>
				<h6>&#10003;&nbsp&nbsp&nbsp&nbsp<?= $p->amount ?> <?= $o->name ?> Water Added to Your Bag</h6>
			</div>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button6">PROCEED TO CHECKOUT</a>
					</div>

		</div>
	</div>
	
	<div class="footer">
		<div class="footer-content">

			<div class="footer-section about">
				<h1>Caliwater</h1>
				<p>CALIWATER is a store selling water with different fruit flavors. Instead of boring old water, “Caliwater” makes water delicious without sugar or sweeteners. </p>
			</div>

			<div class="footer-section about2">
				<h1>Quick Link</h1>
				<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			</div>

	
	
	
		</div>
		<div class="footer-bottom">
			&copy; Designed by Fei
		</div>
	</div>
</body>
</html>