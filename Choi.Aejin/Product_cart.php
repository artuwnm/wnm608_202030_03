<?php

include_once "lib/php/functions.php";
include_once "Parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>PRODUCT CART</title>
	<?php include "Parts/meta.php" ?>
</head>

<body>
	<?php include "Parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs">
			
			<ul><li><a href="Product_list.php"><h4>Back</h4></a></li>
			</ul>
		</nav>

<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card">
               
               <?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>


<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<?= cartTotals() ?>
					</div>
				<div class="card-section">
				
				
				<a class="button primary" href="Product_checkout.php">Checkout</a>
			</div>

		</div>
	</div>
</div>



	
</body>
</html>





	






















		