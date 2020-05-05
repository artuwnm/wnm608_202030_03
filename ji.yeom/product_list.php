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

	<div class="container">
		<div class="card">
			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="search" placeholder="Search Products">
				</form>
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">
					<button type="button" class="form-button js-filter" data-type="category"  data-value="">All</button>
					<button type="button" class="form-button js-filter" data-type="category"  data-value="pin">Pin</button>
					<button type="button" class="form-button js-filter" data-type="category"  data-value="patch">Patch</button>
				</div>
			</div>
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

			<div class="grid gap productlist">
			</div>
		</div>
	</div>

</body>
</html>