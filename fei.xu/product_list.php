<?php

include_once "lib/php/functions1.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<meta charset="UTF-8">



	<meta name="viewport" content="width=device-width">


	<link rel="stylesheet" href="lib/css/styleguide2.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme2.css">

	

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/products.js"></script>
	
<!-- 	<script src="js/list.js"></script>
	<script src="js/templates.js"></script>
	<script src="../lib/js/functions.js"></script>
 -->
	<!-- font family -->

	<link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

	<?php include "finalphp/finalparts/navbar.php" ?>

	<div class="container">
		<h3>Product List</h3>

				<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>

		</div>
		<div class="form-control2 ">
			<div class="flex-none">
				<button type="button" class="form-button3 js-filter" data-type="category" data-value="">All</button>
			<!-- </div>
			<div class="flex-none"> -->
				<button type="button" class="form-button3 js-filter" data-type="category" data-value="water">Water</button>
		<!-- 	</div>
			<div class="flex-none"> -->
				<button type="button" class="form-button3 js-filter" data-type="category" data-value="sparklings">Sparklings</button>
			</div>
		</div>

		<div class="form-control3">
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

		<div class="grid gap productlist"></div>
	</div>
	
	
</body>
</html>