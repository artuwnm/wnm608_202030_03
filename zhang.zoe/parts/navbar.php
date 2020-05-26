<?php
include_once "parts/templates.php";
?>
<header class="navbar" style="background: #fff;color: #3a56a4">
	<link href='https://fonts.googleapis.com/css?family=Cormorant' rel='stylesheet'>
	<div class="container display-flex" >
		<div class="flex-stretch">
			<a href="index.php"><img src="img/logo2.png" alt="" style="width:5em;" ></a>
			
		</div>
		<nav class="nav-flex flex-none" style="font-family: 'Cormorant';font-weight: 700; font-size: 20px;">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
				<li><a href="admin/index.php">For Admin</a></li>
			</ul>
		</nav>

		
	</div>
</header>


