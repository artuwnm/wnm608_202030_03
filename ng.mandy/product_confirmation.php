<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Confirmation</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card flat">
			<h1>Thank you for your order</h1>

			<div>
				<h3>Order number is: <?= getOrderNumber() ?></h3>
				<p>You will receive an email confirmation shortly from info@snackshack.com.</p>
			</div>

			<div>
				<a class="form-button confirm_half" href="product_list.php">Continue Shopping</a>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>