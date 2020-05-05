<?php
include_once "templates.php";
?>
<base href="http://arianaad.com/aau/wnm608/adili.ariana/">
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-stretch">
			<h1>BEGARI</h1>
		</div>
		<nav class="nav-flex flex-none">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="productlist.php">STORE</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="product_cart.php">
					<span>CART</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>