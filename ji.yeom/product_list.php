<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Shop</title>

	<?php include "parts/meta.php" ?>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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

	<script type="text/javascript">
		$(document).on('click', 'ul li', function(){
			$(this).addClass('active').siblings().removeClass('active')
		})
	</script>

<br>
<br>			
		<div class="grid gap">
			<div class="col-xs-12 col-md-3">
			<div class="form-control display-flex">
				<form class="search-bar" id="product-search">
					<div class="flex-none icons">
						<i class="fa fa-search" style="color: #5AFF5A;"></i>
					</div>
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>
			</div>

			<div class="col-xs-12 col-md-6">
			<div class="form-control display-flex flex-align-center flex-justify-center">
				<div class="flex-none">
					<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="">All</button>
				</div>
				<div class="flex-none">
					<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="pin">Pin</button>
				</div>
				<div class="flex-none">
					<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="patch">Patch</button>
				</div>
			</div>
			</div>

			<div class="col-xs-12 col-md-3">
			<div class="form-control display-flex">
				<p style="padding-right: 10px">Sort by</p>
				<div class="form-select">
					<select class="js-sort">
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

<br>
		<div class="grid gap large productlist">
		</div>

		</div>
	</div>

</body>
</html>