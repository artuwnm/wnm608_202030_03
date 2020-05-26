<?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"title"=>"",
	"price"=>"",
	"category"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"quantity"=>"",
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
			<img src="images/$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch product-name">
		<div>$o->name</div>
		<div>&dollar;$o->price</div>
	</div>
	<div class="flex-none display-flex">
		<div><a class="form-button green" href="admin/?id=$o->id">Edit</a></div>
		<div><a class="form-button yellow" href="product_item.php?id=$o->id">Visit</a></div>
	</div>
</div>
HTML;
}


function makeProductForm($o) {

$id = $_GET['id'];
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete<img class="arrow" src="img/delete.png" alt="Delete"></a></li>
HTML;

$images = array_reduce(explode(",",$o->images),function($r,$p){
	return $r."<img src='images/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">

<div class="product-main">
	<img src="images/$o->thumbnail">
</div>
<div class="product-thumbs">$images</div>

<h5>$o->name</h5>

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
<nav class="nav-crumbs-1">
	<div class="card soft">
	<ul>
		<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}"><img class="arrow" src="img/back.png" alt="Back"> Back</a></li>
		<li class="flex-stretch"></li>
		$deletebutton
	</ul>
	</div>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			$data_show
		</div>
		<div class="col-xs-12 col-md-5">
			<div class="card soft">
			<h5>$addoredit Product</h5>
			<div class="form-control">
				<label class="form-label" for="product-name">Name</label>
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
				<label class="form-label" for="product-quantity">Quantity</label>
				<input class="form-input" id="product-quantity" name="product-quantity" value="$o->quantity">
			</div>
			<div class="form-control">
				<input type="submit" class="form-button red" value="Submit">
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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<header class="navbar-top">
</header>

<header class="navbar">
		<div class="container display-flex">
			<div id="page-nav" class="nav-flex flex-none">

<!--Hamburger Menu-->

<label for= "hamburger">&#9776;</label>
<input type="checkbox" id="hamburger"/>
<div id="logo-header" class="flex-stretch"><a href="index.php"><img class="logo" src="img/coolkeychains-logo.png" alt="CoolKeychains"></a></div>

	<ul class= "nav-pills">
		<li><a href="./product_list.php"><img class="icon-admin" src="img/store2.png" alt="store2"><br>STORE</a></li>

		<li><a href="admin/"><img class="icon-admin" src="img/list.png" alt="list"><br>PRODUCT LIST</a></li>

		<li><a href="admin/?id=new"><img class="icon-admin" src="img/add.png" alt="add"><br>ADD PRODUCT</a></li>

	</ul>

		</nav>
	</div>

</header>


	
	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">Product Admin</div>
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
			<div class="card soft">
			<h5>User List</h5>

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
	


<div class="footer">

	<div class="grid gap">
			<div class="col-xs-12 col-md-6">

  				<img class="logo-footer" src="img/coolkeychains-logo.png" alt="CoolKeychains">
  				<div class="vl"></div>
  			</div>
  
			<div class="col-xs-12 col-md-6">

				<div class="social-container">
    				<ul class="social-icons">
        			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
        			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    				</ul>
				</div>
  			</div>

	</div>

<div class="footer-buttom"><p>Cool Keychains.com ©2020 by Wilson Barrios | MFA-CA | #04389249</p></div>	
</body>
</html>