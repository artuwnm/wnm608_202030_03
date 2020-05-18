<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product Cart</title>
	<?php include "parts/meta.php" ?>
	<link rel="stylesheet" href="lib/css/storetheme.css">
	
	
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="productlist.php">BACK</a></li>
			</ul>
		</nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card flat">
				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
				<?php
				echo array_reduce($cartItems,'cartTotals');
				?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-5">

				<div class="card soft">
					<a class="form-button" href="product_checkout.php">CHECKOUT</a>
				</div>
				
			</div>
	</div>
	
</body>
</html>