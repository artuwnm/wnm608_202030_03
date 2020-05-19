<?php

session_start();
$_SESSION['cart'] = [];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Confirmation</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:4em 0">
		</nav>
		<div class="confirm">
		<img src="images/thankyou.png" alt="">
		</div>
	<nav class="nav-crumbs" style="margin:2em 0">
		</nav>
		<div class="card">
				<h4>THANK YOU FOR PURCHASING</h4>
			</div>
			<nav class="nav-crumbs" style="margin:2em 0">
		</nav>
			<div>
				<a href="product_list.php" class="form-button_black confirm">CONTINUE SHOPPING</a>
			</div>
		</div>
	</div>


</body>
</html>