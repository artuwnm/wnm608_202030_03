<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";




// print_p($rows);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "finalparts/meta.php" ?>

</head>
<body>
	<header>

	<?php include "finalparts/navbar.php" ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
</header>




	<div class="container">
		<h3>Product List</h3>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>

		</div>
		<div class="form-control2 ">
			<div class="flex-none">
				<button type="button" class="form-button4 js-filter" data-type="category" data-value="">All</button>
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
					<option value="1">FEATURED</option>
					<option value="1">NEWEST</option>
					<option value="3">OLDEST</option>
					<option value="4">PRICE: HIGH TO LOW</option>
					<option value="5">PRICE: LOW TO HIGH</option>
				</select>
			</div>
		</div>

		<div class="grid gap productlist">



		</div>
	</div>
	
</body>
</html>