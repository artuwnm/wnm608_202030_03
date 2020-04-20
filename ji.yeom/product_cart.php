<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Cart</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs">
			<ul>
				<li><a href="product_list.php"><h5>Back</h5></a></li>
			</ul>
		</nav>
		<div class="card soft">
			<h2>Product Cart</h2>

			<div class="grid gap">
				<div class="col-xs-12 col-xs-8">
					<div class="card">
						<div>
							<a class="button primary" href="product_checkout.php">Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>