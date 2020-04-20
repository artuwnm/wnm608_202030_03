<?php

// include, require, include_once, require_once
// include  goes on even there's a error
// require stops when there's a error

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>
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
				The item is #<?= $_GET['id'] ?>
			</div>

			<div>
				<a class="button primary" href="product_added_to_cart.php">Add To Cart</a> 
			</div>

		</div>
	</div>
	
</body>
</html>