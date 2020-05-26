<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "parts/meta.php" ?>
	<script src="js/list.js"></script>

</head>
<body style="background: #fff">

	<?php include "parts/navbar.php" ?>

	<div class="container">

		<div class="form-control">
			<form class="hotdog light" id="product-search" style="padding-left: 0">
				<input type="search" class="search" placeholder="Search Products" style="border: 1px solid #C0C0C0;width: 500px;height: 30px;border-radius:25px;padding-left: 10px">
			</form>
		</div>
		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Flowers">Flowers</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="Plants">Plants</button>
			</div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="Food">Food</button>
            </div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="Landscape">Landscape</button>
            </div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="Season">Season</button>
            </div>
		</div>
<!--		<div class="form-control">-->
<!--			.form-select>select>option -->
<!--			<div class="form-select">-->
<!--				<select class="js-sort">-->
<!--					<option value="1">Newest</option>-->
<!--					<option value="2">Oldest</option>-->
<!--					<option value="3">Most Expensive</option>-->
<!--					<option value="4">Least Expensive</option>-->
<!--				</select>-->
<!--			</div>-->
<!--		</div>-->

		<div class="grid gap productlist"></div>


<!--		<div>-->
<!--			<a href="admin">Product Admin</a>-->
<!--		</div>-->
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>