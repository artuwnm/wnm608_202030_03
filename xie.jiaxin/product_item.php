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
			<div class="col-xs-12 col-md-6">
				<div class="card">
					<div class="product-main">
						<img src="<?= $o->image ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">


                <form method="get" action="data/form_actions.php">

                <div class="card">
					<div class="card-section">
						<h2><?= $o->name ?></h2>
						<div class="product-description">
							<div class="product-price">&dollar;<?= $o->price ?></div>
						</div>
					</div>
					<div class="card-section">
						<label class="form-label">Select Size</label>
						<button name="size" class="choice-button">
							<option value="">16"x16"</option>
						</button>
						<button name="size" class="choice-button">
							<option value="">18"x18"</option>
						</button>
						<button name="size" class="choice-button">
							<option value="">20"x20"</option>
						</button>
					</div>

					<div class="card-section">
						<label class="form-label">Amount</label>
						<select name="amount" class="form-input">
							<!-- option*10>{$} -->
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					<div class="card-section">
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="large-button" value="Add To Cart">
						<!-- <a class="large-button" href="product_added_to_cart.php">Add To Cart</a> -->
					</div>
				</div>
                </form>



			</div>
		</div>
	</div>
	
</body>
</html>