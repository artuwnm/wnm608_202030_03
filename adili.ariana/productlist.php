<?php

include_once "lib/php/functions.php";
function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image-square">
			<img src="images/$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>$o->title</strong></div>
		<div><span>$o->price</span></div>
	</div>

	<div class="flex-none display-flex">
		<div><a class="form-button" href="data/form_actions.php?id=$o->id&action=add-to-cart&amount=1&price=$o->price">Add to cart</a></div>
		<div><a class="form-button" href="productitem.php?id=$o->id&actionId=view">View</a></div>
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
	<link rel="stylesheet" href="lib/css/storetheme.css">

	

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>

		
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


<!-- Query the products table to get all products -->
<!-- Parse query results to display products -->

<?php
	$allProductsQuery = "SELECT * FROM `products`";
	$conn = makeConn();
	$allProductsResult = $conn->query($allProductsQuery);
	// $results
	$rows = getRows($conn, "SELECT * FROM `products`");
	echo array_reduce($rows,'makeListItemTemplate'); 
// 	if ($allProductsResult->num_rows > 0) {
//   // output data of each row
//   while($row = $allProductsResult->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - ProductName: " . $row["title"]. "- " . $row["price"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();
?>
	
</body>
</html>