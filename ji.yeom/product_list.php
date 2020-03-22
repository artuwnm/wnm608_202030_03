<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>
</head>

<body>
	
	<?php include "parts/navber.php" ?>

	<header class="navbar">
		<div class="display-flex">
			<div class="flex-strech">
				<h1>Store</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="#">Store</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Account</a></li>
					<li><a href="#">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<div class="containter">
		<div class="card soft">
			<h2>Product List</h2>
			<div>
				<ul>
					<li><a href="product_item.php?id=1">Product 1</a></li>
					<li><a href="product_item.php?id=2">Product 2</a></li>
					<li><a href="product_item.php?id=3">Product 3</a></li>
			</div>
		</div>
	</div>

</body>
</html>