<?php

include_once "../lib/php/functions.php";

$empty_product = (object) [
	"name"=>"Kiwi",
	"price"=>"2.56",
	"category"=>"fruit",
	"description"=>"A small hairy flightless bird.",
	"thumbnail"=>"img/united-kingdom-tp.jpg",
	"images"=>"img/united-kingdom-tp.jpg",
	"quantity"=>"66"
];



// CRUD LOGIC
try {

$conn = makeConn();
switch(@$_GET['action']) {
	case "update":
		$statement = ("UPDATE
		`products`
		SET
			`name`='".$_POST['product-title']."' ,
			`price`='".$_POST['product-price']."' ,
			`category`='".$_POST['product-category']."' ,
			`description`='".$_POST['product-description']."' ,
			`thumbnail`='".$_POST['product-thumbnail']."' ,
			`images`='".$_POST['product-images']."' ,
			`quantity`='".$_POST['product-quantity']."' ,
			`date_modify`=NOW()
		WHERE `id`='$_GET[id]'
		");

        $conn->query($statement);
        //echo $statement;
        header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$statement = ("INSERT INTO
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
		('".$_POST['product-title']."','".$_POST['product-price']."','".$_POST['product-category']."','".$_POST['product-description']."','".$_POST['product-images']."','".$_POST['product-thumbnail']."','".$_POST['product-quantity']."',NOW(),NOW())
		");

		$conn->query($statement);
        $id = (mysqli_insert_id($conn));
		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;
	case "delete":
		$statement = $conn->query("DELETE FROM `products` WHERE id=".$_GET['id']);


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
		<div class="image-square" style="width:80px;height:85px;">
			<img src="$o->images" width="80" height="85">
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>$o->name</strong></div>
		<div><span>$o->category</span></div>
	</div>
	<div class="flex-none display-flex">
		<div style="margin-right:10px"><a class="form-button1" href="admin/?id=$o->id">edit</a></div>
		<div><a class="form-button1" href="product_item.php?id=$o->id">visit</a></div>
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
	return $r."<img src='$p'>";
});

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">

<div class="product-main">
	<img src="$o->thumbnail">
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
		<div class="col-xs-12 col-md-5">
			$data_show
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label class="form-label" for="product-title">Title</label>
				<input class="form-input" id="product-title" name="product-title" value="$o->name">
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
	<title>Learning Data</title>

	<?php include "../parts/meta.php" ?>
    <style>
        .itemlist-item {
            margin:1em;
            padding:1em;

            border-bottom:1px solid var(--color-neutral-light);
        }

        .product-main img {
            width:100%;
            height:50vh;
            object-fit:cover;
        }
        .product-thumbs img {
            height:75px;
            width:100px;
            object-fit:cover;
        }

        /* FIGURE */
        .product-figure {
            margin:0;
            height:100%;
        }
        .product-figure img {
            width:100%;
            object-fit:cover;
            height:30vh;
            vertical-align: text-bottom;

        }
        .product-figure figcaption {
            padding:1em;
            background-color:white;
        }

        .product-figure.soft {
            border-radius:1em;
            overflow:hidden;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }

        .product-figure.overlay {
            position:relative;
            overflow:hidden;
            border-radius:1em;
        }
        .product-figure.overlay figcaption {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background-color:rgba(0,0,0,0.5);
            transition:all 0.3s;
            opacity:0;
        }
        .product-figure.overlay:hover figcaption {
            opacity:1;
        }
        .product-figure.overlay img {
            transition:all 0.5s;
            transform:scale(1,1);
        }
        .product-figure.overlay:hover img {
            transform:scale(1.4,1.4);
        }

        .product-description {
            font-weight:normal;
            text-decoration:none;
        }


        .product-main img {
            width:100%;
            height:50vh;
            object-fit:cover;
        }
        .thumbs img {
            height:75px;
            width:100px;
            object-fit:cover;
        }

        a.form-button1 {
            display: block;
            width: 100%;
            border-width: 0;
            color: white;
            font: inherit;
            padding: 0.5em 1em;
            -webkit-appearance: none;
            outline: 0;
            text-align: center;
            background-color: #2E4C69;
            text-decoration: none;
            cursor: pointer;
        }

        .form-button4 {
            display: block;
            width: 100%;
            border-width: 0;
            color: #2E4C69;
            font: inherit;
            padding: 0.5em 0.5em;
            margin-top: 2em;
            -webkit-appearance: none;
            outline: 0;
            text-align: center;
            border: 1px solid #2E4C69;
            background-color: white;
            text-decoration: none;
            cursor: pointer;
        }
        @media (max-width:600px) {
            .navbar .display-flex {
                display:block;
            }
        }


    </style>
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