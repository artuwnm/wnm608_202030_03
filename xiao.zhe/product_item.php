<?php

// include, require, include_once, require_once
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
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card item1">
					<div class="product-main">
						<img src="/aau/wnm608_202030_03/xiao.zhe/images/store/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='/aau/wnm608_202030_03/xiao.zhe/images/store/$o'>";
					})
					?>
					</div>
				</div>

<!-- 				<div class="card item1"> -->
					
					<div class="col-xs-12 col-md-5">
					  <div class="card item1">
						<h2><?= $o->title ?></h2>
						<div class="product-description">
						<div class="product-price">&dollar;<?= $o->price ?></div>
					  </div>
					  <div>
						<a class="form-button" href="product_added_to_cart.php">Add To Cart</a>
					 </div>	 
				<!-- </div> -->
			
				</div>
			</div>
	</div>
		</div>
		
		<div class="card dark">
			<h3>Description</h3>
			<div><?= $o->description ?></div>
		</div>
	</div>
	
</body>
</html>