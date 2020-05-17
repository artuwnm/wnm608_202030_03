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

	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">Product Page</div>
			</div>
	</header>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php"><img class="arrow" src="img/back.png" alt="Back"> BACK</a></li>

				

				</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="images/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='images/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="get" action="data/form_actions.php">
					<div class="card-section">
						<h5><?= $o->name ?></h5>
						<div class="product-description">
							<div class="product-price">&dollar;<?= $o->price ?></div>
							<br>
						
					
					

					<h5>Description</h5>
					<div class="product-description">
					<div><?= $o->description ?></div>
				</div>
					<br>
					<br>
						<label class="form-label">Amount</label>
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
					</div>
					<div class="card-section">
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="form-button green" value="Add To Cart">
					</br>
						
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container">
			<h5>Recommended Products</h5>
			<?php recommendedSimilar($o->category,$o->id) ?>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
    </div>
	
</body>
</html>