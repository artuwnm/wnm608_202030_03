<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart-24 SOLAR TERMS</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>



        <div class="cardblue">
			<h2 class="bigtitle">Cart</h2>
			
		</div>




	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
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
					<?= cartTotals() ?>
					
					<div class="btnstyle card-section">
						<button class="btn first"><a href="product_checkout.php" class="form-button confirm">Checkout</a></button>
					</div>
            


				</div>
			</div>
		</div>
	</div>






	<?php include "parts/footer.php" ?>


	
</body>
</html>