<?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"title"=>"",
	"price"=>"",
	"category"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"quantity"=>""
];


$conn = makeConn();







// TEMPLATES

function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image-square">
			<img src="/images/store/$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>$o->title</strong></div>
		<div><span>$o->category</span></div>
	</div>
	<div class="flex-none display-flex">
		<div><a class="form-button" href="admin/?id=$o->id">edit</a></div>
		<div><a class="form-button" href="product_item.php?id=$o->id">visit</a></div>
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
	return $r."<img src='/images/store/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">

<div class="product-main">
	<img src="/images/store/$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>

<h2>$o->title</h2>

<div class="form-control">
	<strong>Price</strong>
	<span>$o->price</span>
</div>
<div class="form-control">
	<strong>Category</strong>
	<span>$o->category</span>
</div>
<div class="form-control">
	<strong>Description</strong>
	<span>$o->description</span>
</div>
<div class="form-control">
	<strong>Quantity</strong>
	<span>$o->quantity</span>
</div>

</div>
HTML;



echo <<<HTML
<nav class="nav-pills">
	<div class="card soft">
	<ul>
		<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		<li class="flex-stretch"></li>
		$deletebutton
	</ul>
	</div>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			$data_show
		</div>
		<div class="col-xs-12 col-md-8">
			<div class="card soft">
			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label class="form-label" for="user-title">Title</label>
				<input class="form-input" id="user-title" name="user-title" value="$o->title">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-price">Price</label>
				<input class="form-input" id="user-price" name="user-price" value="$o->price">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-category">Category</label>
				<input class="form-input" id="user-category" name="user-category" value="$o->category">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-description">Description</label>
				<textarea class="form-input" id="user-description" name="user-description">$o->description</textarea>
			</div>
			<div class="form-control">
				<label class="form-label" for="user-thumbnail">Thumbnail</label>
				<input class="form-input" id="user-thumbnail" name="user-thumbnail" value="$o->thumbnail">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-images">Other Images</label>
				<input class="form-input" id="user-images" name="user-images" value="$o->images">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-quantity">Quantity</label>
				<input class="form-input" id="user-quantity" name="user-quantity" value="$o->quantity">
			</div>
			<div class="form-control">
				<input type="submit" class="form-button" value="Submit">
			</div>
			</div>
		</div>
	</div>
</form>
HTML;

}







// LAYOUT

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Data</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Product Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="./product_list.php">Home</a></li>
					<li><a href="admin/">Product List</a></li>
					<li><a href="admin/?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

			<?php 

			if(isset($_GET['id'])){

				if($_GET['id']=="new") {
					makeProductForm($empty_product);
				} else {
					$rows = getRows($conn, "SELECT * FROM `products` WHERE `id`='{$_GET['id']}'");
					makeProductForm($rows[0]);
				}


			} else {

			?>
			<div class="card soft">
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