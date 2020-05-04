<?php

include_once "lib/php/functions.php";

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

		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="sushi">Sushi</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="sashimi">Sashimi</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="A5 Wagyu">A5 Wagyu</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="snack">Special Snack</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="uni">Sea Urchin</button>
			</div>
			<div class="flex-none">
				<button type="button" class="btn btn-primary btn-outline js-filter" data-type="category" data-value="oyster">Oyster</button>
			</div>
		</div>

	<div class="col-xs-6 col-md-6">
		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
				</select>
			</div>
		</div>
	</div>

	<div class="col-xs-6 col-md-6">
		<div class="form-control-search">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
	</div>


		<div class="productlist">

			<div class="container">
				<h2>Product List</h2>

					<div class="grid gap">

					<?php

					$rows = getRows(
						makeConn(),
						"SELECT *
						FROM `Test`
						ORDER BY `date_create` DESC
						LIMIT 21
						"
					);

					echo array_reduce(
						$rows,
						'productListTemplate'
					);

					?>

					</div>
			</div>

		</div>


	</div>

	
</body>
</html>
















