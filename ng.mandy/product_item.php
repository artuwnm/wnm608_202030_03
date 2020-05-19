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
				<li><a class="form-button back" href="product_list.php">< Back to products</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card flat">
					<div class="product-main">
						<?=
						array_reduce($images, function($r, $o){
							return $r."<img src='img/".$o."' width=500 height=375>";
						})
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card dark" method="get" action="data/form_actions.php">
					<div class="card-section">
						<h1 ><?= $o->title ?></h1>
						<div class="product-summary">
							<div class="product-price big">&dollar;<?= $o->price ?></div>
							<div class="product-long-d"><?= $o->long_description ?></div>
							<div class="product-short-d"><?= $o->short_description ?></div>
						</div>
					</div>
					<div class="card-section">
						<label class="form-label">Amount</label>
						<div class="form-select">
							<select name="amount">
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
					<div class="card-section">
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="submit" class="form-button addtocart " value="ADD TO CART">
					</div>
				</form>
			</div>
		</div>
		
		<div>
			<h2>Recommended Products</h2>
			<?php recommendedSimilarRegion($o->region,$o->id) ?>
		</div>
	</div>
	

	<?php include "parts/footer.php" ?>
	
</body>
</html>