<!DOCTYPE html>
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
				<a href="product_list.php" class="btn btn-primary btn-outline">Back</a>
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
					<div class="card-section checkout">
						<a href="product_checkout.php" class="btn btn-primary btn-outline2">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include "parts/footer.php" ?>

<!-- GOTOTOP -->
	<a class="gototop" href="product_cart.php"><i class="fas fa-arrow-up"></i></a>
	
</body>
</html>