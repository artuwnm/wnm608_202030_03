<?php

// include, require, include_once, require_once
include_once "lib/php/functions.php";
include_once "parts/templates.php";

@$id = intval($_GET['id']);

$data = getRows(
	makeConn(),
	"SELECT * FROM `products` WHERE `id` = '{$id}'"
);
$o = $data[0];
$images = $o['images'];
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body style="background: #FFF">

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">&lt; Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft" style="height: 410px">
					<div class="product-main">
						<img src="img/<?= $images ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					 "<img src='img/$images' alt=''>";
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="get" action="data/form_actions.php" style="height: 410px">
					<div class="card-section">
						<h2 class="product-title"><?= $o['name'] ?></h2>
						<div class="product-category"><?= $o['category'] ?></div>
						<div class="product-description">
							<div class="product-price">&dollar;<?= $o['price'] ?></div>
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
						<input type="hidden" name="id" value="<?= $o['id'] ?>">
						<input type="hidden" name="price" value="<?= $o['price']?>">
						<input type="submit" class="form-button" value="Add To Cart">
					</div>
				</form>
			</div>
		</div>
		<div class="card soft dark" style="background: #FFF;color: #000">
			<h3>Description</h3>
			<div><?= $o['description'] ?></div>
		</div>
		<div>
			<h2>Recommended Products</h2>
			<?php recommendedSimilar($o['category'],$o['id']) ?>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>