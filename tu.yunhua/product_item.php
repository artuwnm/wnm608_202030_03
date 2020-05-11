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

				<form class="card" method="get" action="data/form_action.php">


				<div class="card">
					<h2><?= $o->name?></h2>
					<div class="product-description">
						<h4>
						<div class="product-price1">&dollar;5.00</div>
						<!-- 5.00 改成 <?= $o->price ?> -->
						</h4>
					</div>

					<div class="card-section">
<!-- 						<div class="col-xs-12 col-md-6">
							<label class="form-label"><h5>Amount</h5></label>
						</div>
 -->
						<select name="amount" class="form-input1">
								
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
						<input type="submit" class="form-button btn publish-btn btn-2" value="Add To Cart">
					</div>

					<br>	
					<br>	
					<br>	
					<br>	
					<br>
					<span><h4>Location</h4></span>
					<div><h5><?= $o->description ?><h5></div>

					</form>	
				</div>	
			</div>
		</div>

		<div>
			<h2>Recommended Products</h2>
			<?php recommendedSimilar($o->category,$o->id) ?>
		</div>



<!-- 
					<div>
						<br>	
						<a class="btn publish-btn btn-2" href="product_added_to_cart.php"><h4>Add To Cart</h4></a>
						<br>			
					</div> -->


		</div>



	<?php include "parts/footer.php" ?>

<!-- GOTOTOP -->
	<a class="gototop" href="product_item.php"><i class="fas fa-arrow-up"></i></a>


</body>
</html>

					
