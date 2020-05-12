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
		<div class="card">
		<nav class="nav-crumbs">
			<ul>
				<li class=""><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Shop</a></li>
				<li><?= $o->category ?></a></li>
				<li><?= $o->name ?></a></li>
			</ul>
		</nav>
		</div>

<script type="text/javascript">
	$(document).on('click', 'ul li', function(){
		$(this).addClass(active).siblings().removeClass(active)
	})
</script>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card">
					<div class="product-main">
						<img src="img/<?= $o->thumbnail ?>">
					</div>
					<div class="product-thumbs grid gap">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='img/$o'>";
					})
					?>
					</div>
				</div>	
			</div>

			<div class="col-xs-12 col-md-5">
				<form class="card flat" method="get" action="data/form_actions.php">
					<div class="card-section">
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
					</div>
<br>
					<div class="card-section">
					<!-- <h5>Description</h5> -->
						<div><?= $o->description ?></div>
						<ul>
							<li><?= $o->material_front ?></li>
							<li><?= $o->material_back ?></li>
							<li><?= $o->dimension ?></li>
						</ul>
					</div>
<br>
					<div class="card-section">
						<div class="form-control display-flex">
							<p style="padding-right: 10px">Quantity (max. 10)</p>
							<div class="form-select">
								<select name="amount" class="form-select" style="border-radius: none">
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
							</div>
						</div>
					</div>
<br>
					<div class="card-section">
						<div class="grid gap">

						<div class="col-xs-12 col-md-6">
							<input type="hidden" name="action" value="add-to-cart">
							<input type="hidden" name="id" value="<?= $o->id ?>">
							<input type="hidden" name="price" value="<?= $o->price ?>">
							<input type="submit" class="form-button primary" value="ADD TO CART">
							<!-- <button type="submit" class="form-button primary">ADD TO CART</button> -->
						</div>

						<div class="col-xs-12 col-md-6">
							<button class="form-button wishlist" data-children-count="1">
								<input type="checkbox" id="heart-example" class="hidden" onclick="alert('The item is added to your wishlist!')">WISHLIST ♥
								<!-- <label for="heart-example">WISHLIST ♥</label> -->
							</button>
						</div>

						</div>
					</div>

				</form>
			</div>
		</div>

<br>
<br>
<br>
	<div>
		<div class="card light">
		<h4 class="center" style="padding: 1em">Recommended Products</h4>
		<br>
		<?php recommendedSimilar($o->category,$o->id) ?>
		<br>
		</div>
	</div>

	</div>

<br>
<br>

	<?php include "parts/footer.php" ?>
</body>
</html>