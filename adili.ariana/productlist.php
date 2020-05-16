<?php

include_once "lib/php/functions.php";
function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image-square">
			<img src="/images/store/$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>$o->title</strong></div>
		<div><span>$o->category</span></div>
	</div>
</div>
HTML;
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Begari | Product List</title>
	
	<?php include "parts/meta.php" ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

	

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>

<!-- Change values to match YOUR database values -->
		
		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="all">ALL</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="shoes">SHOES</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="jackets">JACKETS</button>
			</div>

			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="shirts">SHIRTS</button>
			</div>
		</div>

<!-- Retreive items from database -->

<!-- Get login info from auth.php -->
<!-- Use login info to connect to database -->
<!-- Query the products table to get all products -->
<!-- Parse query results to display products -->

<?php
	$allProductsQuery = "SELECT * FROM `products`";
	$conn = makeConn();
	$allProductsResult = $conn->query($allProductsQuery);
	// $results
	$rows = getRows($conn, "SELECT * FROM `products`");
	echo array_reduce($rows,'makeListItemTemplate'); 
	if ($allProductsResult->num_rows > 0) {
  // output data of each row
  while($row = $allProductsResult->fetch_assoc()) {
    echo "id: " . $row["id"]. " - ProductName: " . $row["title"]. "- " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>


		
<!-- SORT BY: LOWEST TO HIGHEST PRICE? -->

		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<!-- <select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
				</select> -->
			</div>
		</div>

		<div class="grid gap productlist"></div>
	</div>

		<!-- <div>
			<a href="admin">Product Admin</a>
		</div> -->
	
	
</body>
</html>