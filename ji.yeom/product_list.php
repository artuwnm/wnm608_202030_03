<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SHOP</title>

	<?php include "parts/meta.php" ?>
	
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card">

		<nav class="nav-crumbs">
			<ul>
				<li class=""><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Shop</a></li>
			</ul>
		</nav>
		
		<div class="grid gap form-control">
			<div class="col-xs-12 col-md-3">
			<div class="display-flex">
				<form class="search-bar" id="product-search">
					<div class="flex-none icons">
						<i class="fa fa-search" style="color: #5AFF5A;"></i>
					</div>
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>
			</div>

			<div class="col-xs-12 col-md-6">
			<div class="display-flex flex-align-center flex-justify-center">
				<div class="flex-none active filter">
					<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="">All</button>
				</div>
				<div class="flex-none filter">
					<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="pin">Pin</button>
				</div>
				<div class="flex-none filter">
					<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="patch">Patch</button>
				</div>
			</div>
			</div>

			<div class="col-xs-12 col-md-3">
			<div class="display-flex flex-align-center flex-justify-center">
				<p style="padding-right: 10px; white-space:nowrap">Sort by</p>
				<div class="form-select">
					<select class="js-sort" style="padding: 1em 1em">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Price, High to Low</option>
						<option value="4">Price, Low to High</option>
<!-- 						<option value="5">A-Z</option>
						<option value="6">Z-A</option> -->
					</select>
				</div>
			</div>
			</div>

		</div>

		<div class="grid gap productlist" style="padding-top: 1em;">
		</div>

		</div>
	</div>

	<?php include "parts/footer.php" ?>

</body>
</html>