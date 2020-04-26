<?php
include_once __DIR__."/parts/templates.php";
?>
<base href="http://arianaad.com/aau/wnm608/">
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
			<h1>Store</h1>
		</div>
		<nav class="nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="productlist.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					(<span class="badge"><?= makeCartBadge(); ?></span>)
				</a></li>
			</ul>
		</nav>
	</div>
</header>