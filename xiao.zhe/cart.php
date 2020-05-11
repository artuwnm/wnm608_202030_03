<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Cart</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

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
					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
        <div style="width:100%;margin-top:10%;">
            <div style="float:left;width:25%;">Contact with us</div>
            <div style="float:left;color:#ee8734;font-size:30px;font-weight:bold; width:20%;">N°F</div>
            <div style="float:left;width:25%;">
                <div  style="font-weight:bold">MENU</div>
                <div>
                    <div style="margin-top:20px;"><a href="index.php" style="font-weight:normal;text-decoration:none;">Home</a></div>
                    <div style="margin-top:20px;"><a href="about.php" style="font-weight:normal;text-decoration:none;">About</a></div>
                    <div style="margin-top:20px;"><a href="product_list.php" style="font-weight:normal;text-decoration:none;">Shop</a></div>
                    <div style="margin-top:20px;"><a href="cart.php"  style="font-weight:normal;text-decoration:none;">Cart</a></div>
                </div>
            </div>
            <div >
                <div  style="font-weight:bold">Office</div><br> 
                <div>180 NEW MONTGOMERY<br><br>Academy of Art University<br><br>San Fransisco<br><br>CA</div>
            </div>
        </div>

	</div>	
</body>
</html>