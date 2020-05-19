
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Checkout</title>
	<?php include "parts/meta.php" ?>
</head>

<header class="navbar">
	<div class="container display-flex" style="padding-top: 20px;">
		<a class="logo flex-stretch" href="index.php">
			<img src="img/logo.png" alt="logo">
		</a>
		<div class="flex-none">
			<a href="product_list.php">CONTINUE SHOPPING ></a>
		</div>
	</div>
</header>

<body>
	<div class="container">
		<h1 style="text-align: center; color: #5AFF5A;">S W E E T !</h1>
		<h4 style="text-align: center;">Your order is complete.<br>Order number: 57244</h4>
		
		<div class="card light" >
			
			<?php
			echo array_reduce($cartItems,'checkoutListTemplate');
			?>

			<hr style="border-top: 1px solid white">

			<div class="card-section">
			<?= cartTotals() ?>
			</div>
		</div>
	</div>
	
</body>
</html>
