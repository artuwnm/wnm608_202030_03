<?php

// include, require, include_once, require_once
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$data = getRows(
	makeConn(),
	"SELECT * FROM `Test` WHERE `id` = '{$_GET['id']}'"
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
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="images/store/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='images/store/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card">
					<h2><?= $o->name?></h2>
					<div class="product-description">
						<h4>
						<div class="product-price1">&dollar;<?= $o->price ?></div>
						</h4>
					</div>
					<div>
						<br>	
						<a class="btn publish-btn btn-2" href="product_added_to_cart.php">Add To Cart</a>
						<br>			
					</div>
				</div>
			</div>
		</div>
		<div class="card soft dark">
			<h3></h3>
			<div><?= $o->description ?></div>
		</div>
	</div>
	
</body>
</html>