
<?php

include "lib/php/functions.php";
// include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store: Product List</title>

	<?php include "parts/navbar.php" ?>
  <?php include "parts/meta.php" ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/list.js"></script>

</head>
<body>



	
		<div class="container">
			<!-- <div class="card soft"> -->
			<h2>Product List</h2>
         
         <div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="products">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="truffles">Truffle</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="bars">Bar</button>
			</div>
		</div>
		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Milk Chocolate</option>
					<option value="2">Dark Chocolate</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>
		</div>



		<div class="grid gap productlist">

			<div>
			<a href="admin">Product Admin</a>
		</div>
	</div>
		</div>
	</div>
	</div>

</body>
</html>