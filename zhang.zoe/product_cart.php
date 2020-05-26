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
<body style="background: #FFF">

	<?php include "parts/navbar.php" ?>
    <style>
        .divShade{
            height:auto;
            background:#fff;
            color:#333;
            filter:progid:DXImageTransform.Microsoft.Shadow(color=#909090,direction=90,strength=4);
            -moz-box-shadow: 2px 2px 5px #909090;
            -webkit-box-shadow: 3px 3px 10px #909090;
            box-shadow:3px 3px 10px #909090;
        }
    </style>
	<div class="container card soft" >
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">&lt; Back</a></li>
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
						<a href="product_checkout.php" class="form-button confirm" style="width:80%">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>