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
<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Product Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul >
					<li><a href="./product_list.php">Home</a></li>
					<li><a href="admin/index.php">Product List</a></li>
					<li><a href="admin/?id=new">Add New Product</a></li>

				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="admin/index.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="finalphp/img/store/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='finalphp/img/store/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card" method="get" action="data/form_actions.php">
					<h2><?= $o->name ?></h2>
					<div class="product-description">
						<div class="product-price1">&dollar;<?= $o->price ?></div>
					</div>
						<br>

						<h4>Description</h4>
						<div class="descriptiontext"><?= $o->description ?></div>

					<div class="card-section1">
						<label class="form-label">QUANTITY:</label>
						<select name="amount" class="form-input">
							<!-- option*10>{$} -->
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>

						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="form-button" value="Add To Cart">
					</div>

						<br>
						<br>
						<br>

						</form> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>