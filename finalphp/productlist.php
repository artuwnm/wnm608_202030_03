<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product List</title>
	
	<?php include "parts/meta.php" ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<h2>Product List</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>

<!-- Change values to match YOUR database values -->
		
		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
			</div>
			<!-- <div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="fruit">Fruit</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="vegetable">Vegetables</button>
			</div> -->
		</div>
		
<!-- SORT BY: LOWEST TO HIGHEST PRICE? -->

		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
				</select>
			</div>
		</div>

		<div class="grid gap productlist"></div>
	</div>
	
</body>
</html>