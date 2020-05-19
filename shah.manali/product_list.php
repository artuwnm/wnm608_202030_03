<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";




// print_p($rows);

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
		<div class="form-control-filter col-xs-2 col-md-3">
			<div class="flex-none">
				<button type="button" class="form-button4 js-filter" data-type="category" data-value="">All</button>
			<!-- </div>
			<div class="flex-none"> -->
				<button type="button" class="form-button3 js-filter" data-type="category" data-value="truffles">Truffles</button>
		<!-- 	</div>
			<div class="flex-none"> -->
				<button type="button" class="form-button3 js-filter" data-type="category" data-value="bars">Bar</button>
			</div>
		</div>

		<div class="form-control-sort col-xs-4 col-md-3">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Milk</option>
					<option value="2">Dark</option>
					<option value="4">Most Expensive</option>
					<option value="5">Least Expensive</option>
				</select>
			</div>
		</div>

		<div class="grid gap productlist">

	</div>
</div>

		<div class="footer-content">

<!-- 			<div class="footer-section about">
				<h1>Caliwater</h1>
				<p>CALIWATER is a store selling water with different fruit flavors. Instead of boring old water, “Caliwater” makes water delicious without sugar or sweeteners. </p>

			</div>
 -->			

			<div class="footer-section about2">
				<h1>Quick Link</h1>
				<a href="https://www.facebook.com/" class="fa fa-facebook "></a>
				<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			</div>
		

	
	</div>
	
		<?php include "parts/footer.php" ?>

</body>
</html>
