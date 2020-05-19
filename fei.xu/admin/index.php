<?php
include_once "../lib/php/functions1.php";

$empty_product = (object) [
	"name"=>"Watermelon",
	"price"=>"1.99",
	"category"=>"sparklings",
	"description"=>"Pure flavored sparklings, with delicious watermelon and other natural flavors.",
	"thumbnail"=>"water_watermelon1.png",
	"images"=>"water_watermelon1.png",
	"quantity"=>"30"
];     


// CRUD LOGIC
try {

$conn = makePDOConn();

switch(@$_GET['action']) {
	case "update":
		$statement = $conn->prepare("UPDATE
		`products`
		SET
			`name`=? ,
			`price`=? ,
			`category`=? ,
			`description`=? ,
			`thumbnail`=? ,
			`images`=? ,
			`quantity`=? ,
			`date_modify`=NOW()
		WHERE `id`=?
		");

		$statement->execute([
			$_POST['product-name'],
			$_POST['product-price'],
			$_POST['product-category'],
			$_POST['product-description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
			$_POST['product-quantity'],
			$_GET['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;

	case "create":
		$statement = $conn->prepare("INSERT INTO
		`products`
		(
			`name`,
			`price`,
			`category`,
			`description`,
			`thumbnail`,
			`images`,
			`quantity`,
			`date_create`,
			`date_modify`
		)
		VALUES
		(?,?,?,?,?,?,?,NOW(),NOW())
		");
		
		$statement->execute([
			$_POST['product-name'],
			$_POST['product-price'],
			$_POST['product-category'],
			$_POST['product-description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
			$_POST['product-quantity']

		]);
		
		$id = $conn->lastInsertId();



		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;


	case "delete":

		$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
		$statement->execute([$_GET['id']]);
		$id = $conn->lastInsertId();

		header("location:{$_SERVER['PHP_SELF']}");
		break;
}


} catch(PDOException $e) {
	die($e->getMessage());
}










// TEMPLATES

function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image-square">
			<img src="../fei.xu/finalphp/img/store/$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch">
		<div class="listname"><strong>$o->name</strong></div>
		<div class="watername"><span>$o->category</span></div>
	</div>
	<div class="flex-none display-flex">
		<div class="btn5"><a class="form-button1" href="admin/?id=$o->id">edit</a></div>
		<div class="btn5"><a class="form-button1" href="product_item.php?id=$o->id">visit</a></div>
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
	return $r."<img src='../fei.xu/finalphp/img/store/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">

<div class="product-main">
	<img src="../fei.xu/finalphp/img/store/$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>

<h5>$o->name</h5>

<div class="form-control4">
	<strong>Price:</strong>

	<span class="span1">$o->price</span>

</div>
<div class="form-control4">
	<strong>Category:</strong>
	
	<span class="span2">$o->category</span>

</div>
<div class="form-control4">
	<strong>Description:</strong>
	<span>$o->description</span>
</div>
<div class="form-control4">
	<strong>Quantity:</strong>
	<span class="span3">$o->quantity</span>
</div>

</div>
HTML;



echo <<<HTML
<nav class="nav-pills1">
	<div class="card6">
	<ul>
		<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		<li class="flex-stretch">$deletebutton</li>
	</ul>
	</div>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="card8">
			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label class="form-label1" for="product-name">Name</label>
				<input class="form-input1" id="product-name" name="product-name" value="$o->name">
			</div>
			<div class="form-control">
				<label class="form-label1" for="product-price">Price</label>
				<input class="form-input1" id="product-price" name="product-price" value="$o->price">
			</div>
			<div class="form-control">
				<label class="form-label1" for="product-category">Category</label>
				<input class="form-input1" id="product-category" name="product-category" value="$o->category">
			</div>
			<div class="form-control">
				<label class="form-label1" for="product-description">Description</label>
				<textarea class="form-input1" id="product-description" name="product-description" style="height:4em">$o->description</textarea>
			</div>
			<div class="form-control">
				<label class="form-label1" for="product-thumbnail">Thumbnail</label>
				<input class="form-input1" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
			</div>
			<div class="form-control">
				<label class="form-label1" for="product-images">Other Images</label>
				<input class="form-input1" id="product-images" name="product-images" value="$o->images">
			</div>
			<div class="form-control">
				<label class="form-label1" for="product-quantity">Quantity</label>
				<input class="form-input1" id="product-quantity" name="product-quantity" value="$o->quantity">
			</div>
			<div class="form-control3">
				<input type="submit" class="form-button4" value="Submit">
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
	<title>Product Admin</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Product Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul >
					<li><a href="finalphp/product_list.php">Home</a></li>
					<li><a href="admin/">Product List</a></li>
					<li><a href="admin/?id=new">Add New Product</a></li>

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