<?php
include_once "parts/templates.php";
?>
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
			<h1>Store</h1>
		</div>
		<nav class="nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>