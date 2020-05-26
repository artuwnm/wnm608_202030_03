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
		<h3 class="bigtitle">PRODUCT</h3>

		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>
		</div>

		<div class="grid gap productlist"></div>
			
	</div>
	<div>
   <?php include "parts/footer.php" ?>
</div>
	
</body>
</html>

