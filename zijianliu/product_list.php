<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$rows = getRows(
    makeConn(),
    "SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 15
	"
);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "parts/meta.php" ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<h2>Instant-film postcards all series</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Color">Color</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Portrait">Portrait</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Food">Food</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Flower">Flower</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Animal">Animal</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Scenery">Scenery</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Random">Random</button>
			</div>
		</div>
		<div class="form-control">
 
</div>
</div>
<div>
			<a href="admin">Product Admin</a>
		</div>
<?php



        echo array_reduce(
            $rows,
            'productListTemplate'
        );

        ?>

	
</body>
</html>