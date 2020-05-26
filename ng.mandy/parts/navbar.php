<?php
include_once "parts/templates.php";
?>
<header class="navbar">
	<div class="display-flex">
		<div class="flex-stretch">
			<a href="index.php"><img src="img/logo.png"></img></a>
		</div>
		<nav class="nav-stretch flex-stretch">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="product_list.php">PRODUCT</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="product_cart.php">
					<span>CART</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
				<li><a class="form-button navconfirm" href="login.php">LOGIN</a></li>
			</ul>
		</nav>
	</div>
</header>