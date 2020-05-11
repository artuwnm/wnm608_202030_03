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
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card">
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
				<form class="card flat" method="get" action="data/form_actions.php">
					<div class="card-section">
						<h6 class="product-title"><?= $o->title ?></h6>
						<div class="nav-line"></div>
						
						<div class="product-description_detail"><?= $o->description ?>✨
						<div class="product-description_detail"><?= $o->category ?></div>
							<div class="product-price_detail">&dollar;<?= $o->price ?></div>
						</div>
					</div>

					<div class="card-section">
						<div class="nav-line_thin"></div>
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
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="form-button_black" value="ADD TO CART">
					</div>
				</form>
			</div>
		</div>

		<div>

			<h5>一 MORE TO ADORE 一</h5>
			<?php recommendedSimilar($o->category,$o->id) ?>
		</div>
	</div>
	
</body>
</html>