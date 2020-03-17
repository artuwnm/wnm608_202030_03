<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Begari | Product List</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Store</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="#">Home</a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			<ul>
				<li><a href="product_item.php">Product 1</a></li>
				<li><a href="product_item.php">Product 2</a></li>
				<li><a href="product_item.php">Product 3</a></li>
				<li><a href="product_item.php">Product 4</a></li>
			</ul>
		</div>
	</div>
	
</body>
</html>