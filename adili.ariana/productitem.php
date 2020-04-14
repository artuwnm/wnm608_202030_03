<?php

include "lib/php/functions.php";
include "parts/templates.php";

$data = getRows(
	makeConn(),
	"SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'"
);
$o = $data[0];
$images = explode(",",$o->images);


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product Item</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs">
			<ul>
				<li><a href="productlist.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="/images/store/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="productthumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='/images/store/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2><?= $o->title ?></h2>
					<div class="product-description">
						<div class="product-price">&dollar;<?= $o->price ?></div>
					</div>
					<div>
						<a class="form-button" href="product_added_to_cart.php">Add To Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>