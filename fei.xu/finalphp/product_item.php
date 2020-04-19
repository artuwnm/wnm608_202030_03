<?php

include_once "../lib/php/functions.php";
include_once "finalparts/templates.php";

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
	
	<?php include "finalparts/meta.php" ?>
</head>
<body>

	<?php include "finalparts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="img/store/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='img/store/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card">
					<h2><?= $o->name ?></h2>
					<div class="product-description">
						<div class="product-price1">&dollar;<?= $o->price ?></div>
					</div>
					<div>
						<br>
						<a class="form-button" href="product_added_to_cart.php">Add To Cart</a>
						<br>
						<br>
						<h4>Description</h4>
						<div class="descriptiontext"><?= $o->description ?></div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>