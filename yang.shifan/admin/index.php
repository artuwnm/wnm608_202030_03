<?php
    include_once('../lib/php/functions.php');

    $empty_product = (object) [
	"title"=>"",
	"price"=>"",
	"category"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	"quantity"=>""
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
			`category`=? ,
			`description`=? ,
			`thumbnail`=? ,
			`images`=? ,
			`quantity`=? ,
			`date_modify`=NOW()
		WHERE `id`=?
		");
		$statement->execute([
			$_POST['product-title'],
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
			`title`,
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
			$_POST['product-title'],
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
<div class="card-section display-flex col-md-12 col-xs-12">
	<div class="flex-none">
		<img class="product-image" src="../img/$o->images">
	</div>
	<div class="flex-stretch">
		<div><strong>$o->title</strong></div>
	</div>
	<div class="flex-vertical">
		<div><a class="button small" href="index.php?id=$o->id">edit</a></div>
		<div><a class="button small" href="../product_item.php?id=$o->id">visit</a></div>
	</div>
</div>
HTML;
}

function makeProductForm($o) {

$id = $_GET['id'];
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<a class="button back" href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a>
HTML;

$images = array_reduce(explode(",",$o->images),function($r,$p){
	return $r."<img src='../img/$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card">
	<img class="product-image" src="../img/$o->images">
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
<div class="display-flex">
	<div class="display-block">
		<a class="button back" href="{$_SERVER['PHP_SELF']}">Back</a></li>
		$deletebutton
	</div>
</div>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-5">
			<div class="card flat">
			<h2>$addoredit Your Product</h2>
			<div class="form-control">
				<label class="form-label" for="product-title">Title</label>
				<input class="form-input" id="product-title" name="product-title" value="$o->title">
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
				<input type="submit" class="button" value="Submit">
			</div>
			</div>
		</div>
	</div>
</form>
HTML;

}

// LAYOUT
?>
    
<?php 
include('../parts/templates.php');
include('../parts/admin_header.php'); 
?>

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
		<h2>Product List</h2>

		<div class="grid gap">
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

<?php include('../parts/footer.php') ?>

