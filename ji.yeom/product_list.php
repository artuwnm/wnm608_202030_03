<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SHOP</title>

	<?php include "parts/meta.php" ?>
	
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card">
			<nav class="nav-crumbs" style="padding-bottom: 10px">
				<ul>
					<li class=""><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop</a></li>
				</ul>
			</nav>
			<div class="grid gap form-control">
				<div class="col-xs-12 col-md-3">
				<div class="display-flex">
					<form class="search-bar" id="product-search">
						<div class="flex-none icons">
							<i class="fa fa-search" style="color: #5AFF5A;"></i>
						</div>
						<input type="search" class="search" placeholder="Search Products">
					</form>
				</div>
				</div>

				<div class="col-xs-12 col-md-6">
				<div class="display-flex flex-align-center flex-justify-center" style="float: center" id="myActive">
					<div class="flex-none active">
						<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="">ALL</button>
					</div>
					<div class="flex-none ">
						<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="pin">PIN</button>
					</div>
					<div class="flex-none ">
						<button type="button" class="form-button secondary js-filter" data-type="category"  data-value="patch">PATCH</button>
					</div>
				</div>
				</div>

				<div class="col-xs-12 col-md-3">
				<div class="display-flex" style="float: right">
					<p style="padding-right: 10px; white-space:nowrap">Sort by</p>
					<div class="form-select" >
						<select class="js-sort" style="padding-left: 1em;">
							<option value="1">Date, New to Old </option>
							<option value="2">Date, Old to New</option>
							<option value="3">Price, High to Low</option>
							<option value="4">Price, Low to High</option>
						</select>
					</div>
				</div>
				</div>
			</div>

			<div class="grid gap productlist" style="padding-top: 1em;">
			</div>

		</div>
	</div>

<!-- <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myActive");
var btns = header.getElementsByClassName("form-button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script> -->

	<?php include "parts/footer.php" ?>


</body>
</html>