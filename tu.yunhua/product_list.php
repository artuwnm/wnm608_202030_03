<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "parts/meta.php" ?>


</head>
<body>
	<header>


	<?php include "parts/navbar.php" ?>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</header>

	<div class="container">

		<div class="col-xs-6 col-md-6">
			<div class="form-control">
				<!-- .form-select>select>option -->
				<div class="form-select">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
	 					<option value="3">Most Expensive</option>
						<option value="4">Least Expensive</option>
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



		<div class="col-xs-12 col-md-6">
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
		</div>


		<div class="col-xs-12 col-md-6">
			<div class="grid gap productlist"></div>
		</div>
	</div>
</div>



<!-- GOTOTOP -->
	<a class="gototop" href="product_list.php"><i class="fas fa-arrow-up"></i></a>

</body>
</html>




