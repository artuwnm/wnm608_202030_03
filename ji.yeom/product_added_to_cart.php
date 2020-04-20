<?php

// include, require, include_once, require_once
// include  goes on even there's a error
// require stops when there's a error

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added to Cart</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs">
			<ul>
				<li><a href="product_list.php"><h5>Back</h5></a></li>
			</ul>
		</nav>

		<div class="card soft">
			<h2>Product Item</h2>

			<div>
				Thank you for adding to the cart
			</div>

			<div>
				<a class="button primary" href="product_list.php">Continue Shopping</a> 
			</div>

		</div>
	</div>
	
</body>
</html>