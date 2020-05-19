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
				<div class="card softad1">
					<div class="product-main">
						<img src="/aau/wnm608_202030_03/xiao.zhe/images/store/<?= $o->images ?>" alt="">
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
					
					<div class="col-xs-12 col-md-5" >
					  <div class="card ">
						<div class="card"><h2><?= $o->title ?></h2></div>
						<div class="card"><div class="product-description">
						<h4><?= $o->category ?></h4></div>
						<div class="product-price">&dollar;<?= $o->price ?></div></div>
						<div class="card">
						<h5>Description</h5>
						<div><?= $o->description ?></div>
						</div>

						<div>
<!--                       <a class="form-button" href="product_added_to_cart.php?id=<?php /*echo $o->id;*/?>">Add To Cart</a>
-->
                            <form method="get" action="data/form_actions.php">

                            <input type="hidden" name="action" value="add-to-cart">
                            <input type="hidden" name="amount" value="1">
                            <input type="hidden" name="id" value="<?= $o->id ?>">
                            <input type="hidden" name="price" value="<?= $o->price ?>">
                            <input type="submit" class=" form-button large-button" value="Add To Cart">
                            </form>
                        </div>

					  </div>

				</div>
			
				</div>
			</div>
	</div>
		</div>
		
		<div class="container">
			<h2>Recommended Products</h2>
			<?php recommendedSimilar($o->category,$o->id) ?>
		</div>

        <div class="container"><?php include "parts/footage.php" ?><br><br></div>

	</div>


 
</body>
</html>