<?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"title"=>"Magic Box",
	"price"=>"2.56",
	"region"=>"Asia",
	"long_description"=>"Very delicious box.",
	"thumbnail"=>"magic_box_tn.jpg",
	"images"=>"magic_box.jpg",
	"stock"=>"10"
];


// CRUD LOGIC
try {
$conn = makePDOConn();
switch(@$_GET['action']) {
	case "update":
		$statement = $conn->prepare("UPDATE
		`products`
		SET
			`title`=? ,
			`price`=? ,
			`region`=? ,
			`long_description`=? ,
			`thumbnail`=? ,
			`images`=? ,
			`stock`=? ,
			`date_modify`=NOW()
		WHERE `id`=?
		");
		$a = $statement->execute([
			$_POST['product-title'],
			$_POST['product-price'],
			$_POST['product-region'],
			$_POST['product-long_description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
			$_POST['product-stock'],
			$_GET['id']
		]);
		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		echo "bbbb";
		$statement = $conn->prepare("INSERT INTO
		`products`
		(
			`title`,
			`price`,
			`region`,
			`long_description`,
			`thumbnail`,
			`images`,
			`stock`,
			`date_create`,
			`date_modify`,
			`weight`,
			`short_description`
		)
		VALUES
		(?,?,?,?,?,?,?,NOW(),NOW(),1.0,'')
		");
		$statement->execute([
			$_POST['product-title'],
			$_POST['product-price'],
			$_POST['product-region'],
			$_POST['product-long_description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
			$_POST['product-stock']
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
			<img src="img/$o->thumbnail" width=64 height=64>
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>$o->title</strong></div>
		<div><span>$o->region</span></div>
	</div>
	<div class="flex-none display-flex">
		<div class="btn_edit"><a class="form-button edit" href="admin/?id=$o->id">EDIT</a></div>
		<div class="btn_edit"><a class="form-button visit" href="product_item.php?id=$o->id">VISIT</a></div>
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
	return $r."<img src='img/$p' style='max-width: 100%'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card flat">

<div class="product-main">$images</div>
<div class="product-main">
	<img src="img/$o->thumbnail" width=64 height=64>
</div>
</div>
HTML;


echo <<<HTML
<nav class="nav-pills">
	<div class="card flat">
	<ul>
		<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		<li class="flex-stretch"></li>
		$deletebutton
	</ul>
	</div>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="card flat">
			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label class="form-label" for="product-title">Title</label>
				<input class="form-input" id="product-title" name="product-title" value="$o->title">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-price">Price</label>
				<input class="form-input" id="product-price" name="product-price" value="$o->price">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-region">Region</label>
				<input class="form-input" id="product-region" name="product-region" value="$o->region">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-long_description">Description</label>
				<textarea class="form-input" id="product-long_description" name="product-long_description" style="height:4em">$o->long_description</textarea>
			</div>
			<div class="form-control">
				<label class="form-label" for="product-thumbnail">Thumbnail</label>
				<input class="form-input" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-images">Other Images</label>
				<input class="form-input" id="product-images" name="product-images" value="$o->images">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-stock">Stock</label>
				<input class="form-input" id="product-stock" name="product-stock" value="$o->stock">
			</div>
			<div class="form-control">
				<input type="submit" class="form-button edit" value="Submit">
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
			<div class="card flat">
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