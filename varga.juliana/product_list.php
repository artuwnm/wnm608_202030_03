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

<br>
	<div class="container">
		<h2>Product List</h2>

		<div class="grid gap">

			<div class="col-xs-12 col-md-4">
				<div class="form-control">
						<form class="hotdog light" id="product-search">
						<input type="search" class="search" placeholder=" Search Products " alt="">
						</form>
				</div>
			</div>
			

			<div class="col-xs-12 col-md-6">
				<div class="form-control display-flex">
					<div class="flex-none">
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="">All</button></div>
						<div class="flex-none">
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="Necklace">Necklace</button></div>
						<div class="flex-none">
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="Ring">Ring</button>
					</div>
						<div class="flex-none">
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="Earrings">Earrings</button>
					</div>
				</div>
			</div>

				<div class="col-xs-12 col-md-2">
				<div class="form-control">
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


</div>

		<div class="grid gap productlist"></div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>

