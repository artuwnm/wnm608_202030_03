<?php 
include "../lib/php/functions.php";
include "../parts/templates.php";

$data = getRows(
	makeConn(),
	"SELECT * FROM `Products` WHERE `id` = '{$_GET['id']}'"
);
$o = $data[0];

 ?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Single Product Page</title>
	
	<?php include "../parts/meta.php" ?>


</head>
<body>

	<?php include "../parts/navbar.php" ?>
	
	<div class="container">
		<nav class="nav-crumbs">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="/images/store/<?= $o->thumbnail ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2><?= $o->name ?></h2>
					<div class="product-description">
						<div class="product-price">&dollar;<?= $o->price ?></div>
					</div>
					<div>
						<a class="form-button" href="product_added_to_cart.php">ADD TO BAG</a>
					</div>
					<div>
						<a class="form-button" href="cart_page.php">CHECK OUT</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    

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