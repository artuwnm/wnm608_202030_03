<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title> JV : Store</title>
	
	<?php include "parts/meta.php" ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<br>
		<h4 style="text-align: center"> JEWELRY </h4>
		<p style="text-align: center; color: grey">Browse unique Jewelry in our largest selection for every budget,<br>
		all with unique style, superior craftsmanship and hand-matched stones.</p>
		<p style="text-align: center; color: grey; font-weight: bold;">From $25 to over $999</p>
	</div>

<br>
	<div class="container">

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
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="necklace">Necklace</button></div>
						<div class="flex-none">
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="ring">Ring</button>
					</div>
						<div class="flex-none">
						<button type="button" class="form-button-blue js-filter" data-type="category" data-value="earrings">Earrings</button>
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
        <div class="col-xs-12 col-md-4">
		<div class="grid gap productlist"></div>
        </div>
	</div>

        <div class="container">

				<a href="admin/index.php"><button type="button" style="margin-left: 0.9em; width: 100%" class="form-button-blue js-filter" href="product_list.php">Product Admin page</button></a>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>

