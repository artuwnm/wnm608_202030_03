<?php
include_once "../parts/templates.php";
?>

<header class="navbar">
	<div class="container card blacktopline display-flex">
		<div class="flex-stretch">
			<h3>PAINTBOX</h3>
		</div>
		<nav class="nav-flex flex-none">
			<ul>
				<li><a href="landing_page.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="product_cart.php">
					<span>Shopping bag</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>


	</div>
</header>