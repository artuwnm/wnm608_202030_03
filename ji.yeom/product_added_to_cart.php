<?php

// include, require, include_once, require_once
// include  goes on even there's an error
// require stops when there's an error

include_once "lib/php/functions.php";
include_once "parts/templates.php";


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
	<div class="grid gap card">
		<div class="col-xs-12 col-md-8">

		<div class="card">
			<div class="flex-none product-thumbs" style="margin-right:1em">
				<img src="img/<?= $o->thumbnail ?>">
				<p>Thank you for adding total <strong><?= $p->amount ?></strong> of the <strong><?= $o->name ?></strong> to the cart.</p>
			</div>
		</div>

		</div>

		<div class="col-xs-12 col-md-4">
			<div class="card">
				<div class="flex-none">
					<a href="product_cart.php" class="form-button primary">GO TO CHECKOUT</a>
				</div>
				<br>
				<div class="flex-none">
					<a href="product_list.php" class="form-button third">CONTINUE SHOPPING</a>
				</div>
				

<!-- 			<nav class="nav-flex">
				<ul>
					<li class="flex-none">
						<a href="product_list.php" class="form-button secondary">CONTINUE SHOPPING</a>
					</li>
					<li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="product_cart.php" class="form-button primary">GO TO CHECKOUT</a>
					</li>
				</ul>
			</nav> -->
			</div>
		</div>

	</div>
	</div>
</body>
</html>