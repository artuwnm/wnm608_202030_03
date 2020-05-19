<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

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
		<div class="page_title">
			<h2>Order your favorite</h2>
		</div>

        <div class="grid gap">
			<div class="col-xs-12 col-md-4 form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>

			<div class="col-xs-12 col-md-4">
			</div>

			<div class="col-xs-12 col-md-4 form-control form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>
		</div>

		<div class="grid gap">
			<div class="col-xs-6 col-md-1 form-control">
				<button type="button" class="form-button js-filter" data-type="region" data-value="">All</button>
			</div>
			<div class="col-xs-6 col-md-1 form-control">
				<button type="button" class="form-button js-filter" data-type="region" data-value="asia">Asia</button>
			</div>
			<div class="col-xs-6 col-md-1 form-control">
				<button type="button" class="form-button js-filter" data-type="region" data-value="europe">Europe</button>
			</div>
			<div class="col-xs-6 col-md-1 form-control">
				<button type="button" class="form-button js-filter" data-type="region" data-value="north_america">North America</button>
			</div>
			<div class="col-xs-6 col-md-1 form-control">
				<button type="button" class="form-button js-filter" data-type="region" data-value="south_america">South America</button>
			</div>
			<div class="col-xs-6 col-md-1 form-control">
				<button type="button" class="form-button js-filter" data-type="region" data-value="oceania">Oceania</button>
			</div>
		</div>		

		<div class="grid gap productlist"></div>
	
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>