<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product-24 SOLAR TERMS</title>
	
	<?php include "parts/meta.php" ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

	<?php include "parts/navbar.php" ?>




		<div class="cardblue">
			<h2 class="bigtitle">Product</h2>
			
		</div>


	<div class="container">





		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="What are you looking for?">
			</form>
		</div>


        <div class="filter-product grid">
		    <div class="form-control display-flex col-8" >
			    <div class="flex-none">
				    <button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
			    </div>
			    <div class="flex-none">
				    <button type="button" class="form-button js-filter" data-type="category" data-value="Clock">Clock</button>
			    </div>
			    <div class="flex-none">
				    <button type="button" class="form-button js-filter" data-type="category" data-value="Plate">Plate</button>
			    </div>
			    <div class="flex-none">
				    <button type="button" class="form-button js-filter" data-type="category" data-value="Pin">Pin</button>
			    </div>
			    <div class="flex-none">
				    <button type="button" class="form-button js-filter" data-type="category" data-value="Phone Shell">Phone Shell</button>
			    </div>
			
		    </div>

		    <div class="form-control form-select col-4 display-flex" style="flex-direction: row-reverse;margin-top:5px;">
			<!-- .form-select>select>option -->
			
				<select class="js-sort" style="width:200px;height:40px;">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			
		     </div>
	    </div>
		

		<div class="grid gap productlist"></div>






	</div>



	<?php include "parts/footer.php" ?>



	
</body>
</html>