<?php
include_once "parts/templates.php";
?>

<header class="navbar">
	<div class="card blacktopline display-flex">
		<div class="flex-stretch">
			<h3><a href="index.php">SPLENDOR</a></h3>
		</div>
		<nav class="nav-flex flex-none">
			<ul>
				
	
				<li><a href="product_list.php">STORE</a></li>
				<li><a href="product_cart.php">
					<span>CART</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>

		

	</div>
</header>


	</div>
</header>