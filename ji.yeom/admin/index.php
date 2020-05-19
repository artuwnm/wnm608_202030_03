<?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"name"=>"Yellow Submarine",
	"price"=>"12.00",
	"category"=>"Pin",
	"description"=>"We all live in a yellow submarine, yellow submarine, yellow submarine! It's from Yellow Submarine by the Beatles. This cute pin is a great addition to your favorite clothes, jeans, jacket, backpack, and so on.",
	"material_front"=>"Silver plated brass pin with hard enamel",
	"material_back"=>"Metal pin clutch",
	"dimension"=>"1.5 in x 0.5 in x 2 mm",
	"quantity"=>"300",
	"thumbnail"=>"pin_yellow-submarine_thumbnail.jpg",
	"images"=>"pin_yellow-submarine_1.jpg,pin_yellow-submarine_2.jpg,pin_yellow-submarine_3.jpg"
];


//print_p($_GET);
// print_p($_POST);


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
			`material_front`=? ,
			`material_back`=? ,
			`dimension`=? ,
			`quantity`=? ,
			`thumbnail`=? ,
			`images`=? ,
			`date_modify`=NOW()
		WHERE `id`=?
		");
		$statement->execute([
			$_POST['product-name'],
			$_POST['product-price'],
			$_POST['product-category'],
			$_POST['product-description'],
			$_POST['product-material_front'],
			$_POST['product-material_back'],
			$_POST['product-dimension'],
			$_POST['product-quantity'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
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
			`material_front`,
			`material_back`,
			`dimension`,
			`quantity`,
			`thumbnail`,
			`images`,
			`date_create`,
			`date_modify`
		)
		VALUES
		(?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
		");
		$statement->execute([
			$_POST['product-name'],
			$_POST['product-price'],
			$_POST['product-category'],
			$_POST['product-description'],
			$_POST['product-material_front'],
			$_POST['product-material_back'],
			$_POST['product-dimension'],
			$_POST['product-quantity'],
			$_POST['product-thumbnail'],
			$_POST['product-images']
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
<div class="itemlist-item display-stretch">
	<div class="display-flex flex-align-center flex-justify-center">
		<div class="flex-none image-square" style="margin-right:0.5em">
			<img src="img/$o->thumbnail">
		</div>
		<div class="flex-stretch">
			<div><h4 style="margin: 0;">$o->name</h4></div>
			<div><span class="small-text">$o->category</span></div>
		</div>
		<div class="form-control flex-none">
			<div><a class="form-button third" href="admin/?id=$o->id">Edit</a></div>
			<div><a class="form-button" href="product_item.php?id=$o->id">Visit</a></div>
		</div>
	</div>
</div>
HTML;
}





function makeProductForm($o) {

$id = $_GET['id'];
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<button class="form-button third"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">DELETE</a></button>
HTML;

$images = array_reduce(explode(",",$o->images),function($r,$p){
	return $r."<img src='img/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card">

<div class="product-main">
	<img src="img/$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>

<h2>$o->name</h2>

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
	<strong>Material Front</strong>
	<span>$o->material_front</span>
</div>
<div class="form-control">
	<strong>Material Back</strong>
	<span>$o->material_back</span>
</div>
<div class="form-control">
	<strong>Dimension</strong>
	<span>$o->dimension</span>
</div>
<div class="form-control">
	<strong>Quantity</strong>
	<span>$o->quantity</span>
</div>

</div>
HTML;



echo <<<HTML
<nav class="nav-flex" style="padding-left: 1em;">
	<ul class="display-flex flex-align-center flex-justify-center">
		<li class="flex-none" style="list-style-type: none"><a href="{$_SERVER['PHP_SELF']}"><h5>< Back to the list</h5></a></li>
		<li class="flex-stretch"></li>
		<li class="flex-none">$deletebutton</li>
	</ul>
</nav>

<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="card light">
			<h3 style="text-align: center">$addoredit Product</h3>

			<div class="form-control">
				<label class="form-label" for="product-naem">Name</label>
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
				<textarea class="form-input" id="product-description" name="product-description" style="height:6em">$o->description</textarea>
			</div>
			<div class="form-control">
				<label class="form-label" for="product-material_front">Material Front</label>
				<input class="form-input" id="product-material_front" name="product-material_front" value="$o->material_front">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-material_back">Material Back</label>
				<input class="form-input" id="product-material_back" name="product-material_back" value="$o->material_back">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-dimension">Dimension</label>
				<input class="form-input" id="product-dimension" name="product-dimension" value="$o->dimension">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-quantity">Quantity</label>
				<input class="form-input" id="product-quantity" name="product-quantity" value="$o->quantity">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-thumbnail">Thumbnail</label>
				<input class="form-input" id="product-thumbnail" name="product-thumbnail" value="$o->thumbnail">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-images">Other Images</label>
				<input class="form-input" id="product-images" name="product-images" value="$o->images">
			</div>
			</div>

			<div class="form-control">
				<input type="submit" class="form-button primary" value="SUBMIT">
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
	<title>Admin Page</title>
	
	<?php include "../parts/meta.php" ?>
</head>

<body>
<!-- 	<header class="navbar">
		<div class="container display-flex flex-align-center flex-justify-center">
			<div class="flex-stretch ">
				<p style="padding-left: 1em; margin: 0"><strong><span style="color: #1155CC">PIN</span> YOUR <span style="color: #5AFF5A">PINS</span> ––––– Admin Page
				</strong></p>
			</div>
			<div class="nav-flex admin flex-none">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="admin">Product List</a></li>
					<li><a href="admin/?id=new">Add New</a></li>
				</ul>
			</div>
		</div>
	</header> -->

<header class="navbar">
	<div class="container display-flex" style="padding-top: 20px;">
		<!-- <div class="flex-none"> -->
			<a class="logo flex-stretch" href="index.php">
				<img src="img/logo.png" alt="logo">
			</a>
		<!-- </div> -->
		<!-- <div class="flex-stretch"></div> -->
		<div class="flex-none nav-flex admim">
			<ul>
				<li><a href="product_list.php" style="font-style: italic">SHOP</a></li>
				<li><a href="admin">Product List</a></li>
				<li><a href="admin/?id=new">Add New</a></li>
			</ul>
		</div>
	</div>
	<h1 style="text-align: center; padding-bottom: 0.5em;">ADMIN PAGE</h1>
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
			<!-- <div class="itemlist"> -->
			<?php

			$rows = getRows($conn, "SELECT * FROM `products`");

			echo array_reduce($rows,'makeListItemTemplate');

			?>
			<!-- </div> -->
			</div>

			<?php 

			}

			?>
	</div>

	<?php include "../parts/footer.php" ?>

</body>
</html>