	<!-- header.navbar>h1+nav.nav -->
	<header class="navbar">
	<div class="container display-flex">
		
		<div class="flex-stretch">
			<div class="logo">
			<img src="img/logo.png">
			</div>
		</div>
		
		<nav class="nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</div>
</header>