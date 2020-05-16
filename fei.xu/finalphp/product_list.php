<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";




// print_p($rows);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

		<div class="form-control col-xs-2 col-md-3">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>

		</div>
		<div class="form-control2 col-xs-2 col-md-3">
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

		<div class="form-control3 col-xs-4 col-md-3">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">FEATURED</option>
					<option value="2">NEWEST</option>
					<option value="3">OLDEST</option>
					<option value="4">PRICE: HIGH TO LOW</option>
					<option value="5">PRICE: LOW TO HIGH</option>
				</select>
			</div>
		</div>

		<div class="grid gap productlist">

	</div>
</div>

		<div class="footer-content">

			<div class="footer-section about">
				<h1>Caliwater</h1>
				<p>CALIWATER is a store selling water with different fruit flavors. Instead of boring old water, “Caliwater” makes water delicious without sugar or sweeteners. </p>

			</div>
			

			<div class="footer-section about2">
				<h1>Quick Link</h1>
				<a href="https://www.facebook.com/" class="fa fa-facebook "></a>
				<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			</div>
		
			<div class="footer-section about3">
				 <div class="productadmin">
					<a href="../admin/index.php"> Product Admin</a>
				 </div>
			</div>


	
	</div>
	
		</div>
		<div class="footer-bottom col-xs-12 col-md-12">
			&copy; Designed by Fei
		</div>

</body>
</html>