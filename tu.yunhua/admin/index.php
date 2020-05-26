 <?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"name"=>"ATELIER CRENN SNACK",
	"price"=>"5.00",
	"category"=>"special snack",
	"description"=>"3127 Fillmore St, San Francisco, CA 94123",
	"thumbnail"=>"special snack_3_m.jpg",
	"images"=>"special snack_3.jpg",
	"quality"=>"1000"
];






// CRUD LOGIC
try {

$conn = makePDOConn();
switch(@$_GET['action']) {
	case "update":
		$statement = $conn->prepare("UPDATE
		`Test`
		SET
			`name`=? ,
			`price`=? ,
			`category`=? ,
			`description`=? ,
			`thumbnail`=? ,
			`images`=? ,
			`quality`=? ,
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
			$_POST['product-quality'],
			$_GET['id']
		]);

		//print_p([$_GET,$_POST]);
		//die("update");

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$statement = $conn->prepare("INSERT INTO
		`Test`
		(
			`name`,
			`price`,
			`category`,
			`description`,
			`thumbnail`,
			`images`,
			`quality`,
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
			$_POST['product-quality']
		]);
		$id = $conn->lastInsertId();

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;
	case "delete":
		$statement = $conn->prepare("DELETE FROM `Test` WHERE id=?");
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
			<img src="./images/store/$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch" style="padding-top: 30px;">
		<div><strong>$o->name</strong></div>
		<div><span>$o->category</span></div>
	</div>
	<div class="flex-none display-flex">
		<div><a class="btn btn-primary btn-outline" href="admin/?id=$o->id">edit</a></div>
		<div><a class="btn btn-primary btn-outline" href="product_item.php?id=$o->id">visit</a></div>
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
	return $r."<img src='./images/store/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">

<div class="product-main">
	<img src="./images/store/$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>

<h2>$o->name</h2>

<div class="form-control">
	<strong>Price</strong>
	<h5>$o->price</h5>
</div>
<div class="form-control">
	<strong>Category</strong>
	<h5>$o->category</h5>
</div>
<div class="form-control">
	<strong>Description</strong>
	<h5>$o->description</h5>
</div>
<div class="form-control">
	<strong>Quality</strong>
	<h5>$o->quality</h5>
</div>

</div>
HTML;



echo <<<HTML
<nav class="nav-pills">
	<ul>
		<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		<li class="flex-stretch"></li>
		$deletebutton
	</ul>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-6">
			$data_show
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="card soft">
			<h2>$addoredit Your Product</h2>
			<div class="form-control">
				<label class="form-label" for="product-name">Title</label>
				<input class="form-input" id="product-name" name="product-name" value="$o->name">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-price">Price</label>
				<input class="form-input" id="product-price" name="product-price" value="$o->price">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-category">Category</label>
				<input class="form-input" id="product-category" name="product-category" value="$o->category">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-description">Description</label>
				<textarea class="form-input" id="product-description" name="product-description" style="height:4em">$o->description</textarea>
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
				<label class="form-label" for="product-quality">Quality</label>
				<input class="form-input" id="product-quality" name="product-quality" value="$o->quality">
			</div>
			<div class="form-control">
				<input type="submit" class="btn btn-primary btn-outline" value="Submit">
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
					<li><a href="./product_home.php">Home</a></li>
					<li><a href="admin/">Product List</a></li>
					<li><a href="admin/?id=new">Publish Your Product</a></li>
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
					$rows = getRows($conn, "SELECT * FROM `Test` WHERE `id`='{$_GET['id']}'");
					makeProductForm($rows[0]);
				}


			} else {

			?>
			<div class="card soft">
			<h2>Product List</h2>

			<div class="itemlist">
			<?php

			$rows = getRows($conn, "SELECT * FROM `Test`");

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