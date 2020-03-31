<!DOCTYPE html>
<html lang="en">
<head>
	<title>Single Product Page</title>
	
	<?php include "../parts/meta.php" ?>


</head>
<body>

	<?php include "../parts/navbar.php" ?>
	
	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<div>
				The item is #<?= $_GET['id'] ?>		
			</div>
		</div>
	</div>
    
    <!-- Buttons -->
    <div class="form-control">
				<button type="button" class="form-button">ADD TO BAG</button>
			</div>

	<div class="form-control">
				<a href="cart_page.php" class="form-button">CHECK OUT</a>
			</div>

    <div>
	<h5>Complete your look</h5>
	</div>

	<div class="container">
		<div class="card soft">
			

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
			</ul>
		</div>
	</div>
	<div>
        <?php include "../parts/footer.php" ?>
        </div>
</body>
</html>