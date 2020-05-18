 <?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"name"=>"",
	"price"=>"",
	"category"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"quality"=>""
];




$conn = makeConn();









// TEMPLATES

function makeListItemTemplate($r,$o) {
return $r.<<<HTML

<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image-square">
			<img src="img/$o->thumbnail">
		</div>
		</div>
	

	
	<div class="flex-stretch-1">
		<div><strong>$o->name</strong></div>
		<div><span>$o->category</span></div>
	</div>


	<div class="flex-none display-flex">

	<div><a class="form-button-1"   href="admin/?id=$o->id">edit</a></div>
	<div><a class="form-button-1"   href="Product_item.php?id=$o->id">visit</a></div>
	
	</div>
</div>
HTML;
}





function makeProductForm($o) {

$id = $_GET['id'];
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a></li>
HTML;

$images = array_reduce(explode(",",$o->images),function($r,$p){
	return $r."<img src='img/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">
<div class="product-main">
	<img src="img/$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>
<h5>$o->name</h5>
<div class="form-control">
	<strong>Price:</strong>
	<span class="span1">$o->price</span>
</div>
<div class="form-control">
	<strong>Category:</strong>
	
	<span class="span2">$o->category</span>
</div>
<div class="form-control">
	<strong>Description:</strong>
	<span>$o->description</span>
</div>
<div class="form-control">
	<strong>Quantity:</strong>
	<span class="span3">$o->quantity</span>
</div>
</div>
HTML;



echo <<<HTML
<nav class="nav-crumbs">
	<ul>
		<li><a href="admin/index.php">Back</a></li>
	</ul>
</nav>

<br>
<br>

<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="card8">
			<h2>$addoredit Product</h2>

			<div class="int">
				<label  for="product-name">Name</label>
				<input class="form-input" id="product-name" name="product-name" value="$o->name">
			</div><br>
			<div class="int">
				<label class="form-label" for="product-price">Price</label>
				<input class="form-input" id="product-price" name="product-price" value="$o->price">
			</div><br>
			<div class="int">
				<label class="form-label" for="product-category">Category</label>
				<input class="form-input" id="product-category" name="product-category" value="$o->category">
			</div><br>
			<div class="int">
				<label class="form-label" for="product-description">Description</label>
				<textarea class="form-input" id="product-description" name="product-description" >$o->description</textarea>
			</div><br>
			<div class="int">
				<label class="form-label" for="product-thumbnail">Thumbnail</label>
				<input class="form-input" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
			</div><br>
			<div class="int">
				<label class="form-label" for="product-images">Other Images</label>
				<input class="form-input" id="product-images" name="product-images" value="$o->images">
			</div><br>
			<div class="int">
				<label class="form-label" for="product-quantity">Quantity</label>
				<input class="form-input" id="product-quantity" name="product-quantity" value="$o->quantity">
			</div><br>
			<div class="int">
				<input type="submit" class="form-button" value="Submit">
			</div>
			</div>
		</div>
	</div>
</form>








HTML;

}















?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Data</title>
	
   <?php include "../Parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h2>Admin</h2>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					 <li><a href="Product_list.php">Home</a></li>
					 <li><a href="admin/">Product List</a></li>
					<li><a href="admin/users.php">User List</a></li>
                    

				</ul>
			</nav>
		</div>
	</header>

<div class="container">

			<?php

			$conn = makeConn();

			if(isset($_GET['id'])){

				if($_GET['id']=="new") {
					makeProductForm($empty_product);
				} else {
					$rows = getRows($conn, "SELECT * FROM `products` WHERE `id`='{$_GET['id']}'");
					makeProductForm($rows[0]);
				}


			} else {

			?>

			<div class="card">
			<h2>User List</h2>

			<div class="itemlist">
			<?php

			$rows = getRows($conn, "SELECT * FROM `products`");

			echo array_reduce($rows,'makeListItemTemplate');
	
			?>
			</div>
		</div>
		
			<?php 

			}

			?>
		
	</div>
	
</body>
</html>