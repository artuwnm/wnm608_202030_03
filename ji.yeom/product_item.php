<?php

// include, require, include_once, require_once
// include  goes on even there's a error
// require stops when there's a error
// include_once  no repeat files

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$data = getRows(
	makeConn(),
	"SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'"
);
$o = $data[0];
$images = explode(",",$o->images);


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li class=""><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><?= $o->category ?></a></li>
				<li><?= $o->name ?></a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card">
					<div class="product-main">
						<img src="img/<?= $o->thumbnail ?>">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='img/$o'>";
					})
					?>
					</div>
				</div>	
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card">
					<h1><?= $o->name ?></h1>
					<div class="product-description">
						<div class="product-price">&dollar;<?= $o->price ?></div>
						<br>
<!-- refer to https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_number -->
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
					</div>

					<br>
					<!-- <h5>Description</h5> -->
						<div><?= $o->description ?></div>

					<ul>
						<li><?= $o->material_front ?></li>
						<li><?= $o->material_back ?></li>
						<li><?= $o->dimension ?></li>
					</ul>

<br>
					<form method="post">
  						<label for="quantity">Quantity: </label>
  						<input type="number" id="quantity" name="quantity" class="button-tiny secondary">
  						<input type="submit" class="button-tiny">
					</form>

					<br>
					<a class="button-small primary" href="product_added_to_cart.php">ADD TO CART</a> 
					<a class="button-small wishlist" href="">WISHLIST</a>
				</div>
			</div>	
		</div>
	</div>
	<br>
	<?php include "parts/footer.php" ?>
</body>
</html>