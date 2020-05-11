<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
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
	<section class>
		<div class="topshow">
				
			<img src="images/list_top.jpg">
				
				
		</div>
	</section>

	<div class="container">


		

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control display-flex">
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="cloth">Cloth</button>
			</div>
			<div class="flex-none">
				<button type="button" class="form-button js-filter" data-type="category" data-value="fabric">Fabric</button>
			</div>
		</div>
		<div class="form-control">
			<!-- .form-select>select>option -->
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Most Expensive</option>
					<option value="4">Least Expensive</option>
				</select>
			</div>
		</div>
		<h2>Product List</h2>

		<div class="grid gap productlist">
			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/cloth_passion.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Passion in Blood</div>
							<div class="product-price">$120.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=2" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/cloth_vessel.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Vessel</div>
							<div class="product-price">$120.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=3" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/cloth_bound.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Bound</div>
							<div class="product-price">$120.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=4" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/cloth_garden.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Garden</div>
							<div class="product-price">$120.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=5" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/cloth_vines.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Vines</div>
							<div class="product-price">$120.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=6" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/cloth_daydream.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Daydream</div>
							<div class="product-price">$120.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=7" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/fabric_organ.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Organ</div>
							<div class="product-price">$40.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=8" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/fabric_origami.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Origami</div>
							<div class="product-price">$40.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=9" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/fabric_mirror.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Mirror</div>
							<div class="product-price">$40.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=10" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/fabric_silver.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Silver Paper</div>
							<div class="product-price">$40.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=11" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/fabric_tyvek.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Tyvek</div>
							<div class="product-price">$40.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a herf="product_item.php?id=12" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image">
							<img src="images/store/fabric_nylon.jpg" alt>
						</div>
						<figcaption class="product-description">
							<div class="product-title">Nylon Organza</div>
							<div class="product-price">$40.00</div>
							
						</figcaption>

					</figure>
				</a>
			</div>

		</div>



		<div>
			<a href="admin">Product Admin</a>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>

</html>