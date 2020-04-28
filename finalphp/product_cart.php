<?php

include_once __DIR__. "/lib/php/functions.php";
include_once __DIR__. "/parts/templates.php";


$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product Cart</title>
	
	<?php include __DIR__. "/parts/meta.php" ?>
</head>
<body>

	<?php include __DIR__. "/parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="productlist.php">Back</a></li>
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
					<div class="card-section">
						<div class="display-flex">
							<div class="flex-stretch">
								<strong>Sub total</strong>
							</div>
							<div class="flex-none">$3.50</div>
						</div>
						<div class="display-flex">
							<div class="flex-stretch">
								<strong>Taxes</strong>
							</div>
							<div class="flex-none">$3.50</div>
						</div>
					</div>
					<div class="card-section">
						<div class="display-flex">
							<div class="flex-stretch">
								<strong>Total</strong>
							</div>
							<div class="flex-none">$3.50</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>