<!--		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Store</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					-- li*3>a[href=#]>{Link $} --
					<li class><a href="index.php">Home</a></li>
					<li class><a href="product_list.php">Product</a></li>
					<li class><a href="#">Cart</a></li>
					<li class><a href="#">About</a></li>
					<li class><a href="#">Log in</a></li>
				</ul>
			</nav>
		</div>
	</header> -->

	<?php
	include_once "parts/templates.php";
	?>

	<!-- header.navbar>h1+nav.nav -->
	<header class="navbar">
		<div class="container display-flex">
			
			<div class="flex-stretch logo">
				<img src="images/logo-b.png">
			</div>
			<nav class="nav flex-none">
				<!-- ul>Li*3>a[href=#]>{Link $} -->
				<!-- <ul class="display-flex">
					<li class><a href="index.php">Home</a></li>
					<li class><a href="product_list.php">Product</a></li>
					<li class><a href="#">Cart</a></li>
					<li class><a href="about.php">About</a></li>
					<li class><a href="#">Log in</a></li>
				</ul> -->
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Product</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
			</nav>
			<!-- <div class="nav flex-none">
				<div class="form-control">
					<input type="search" class="hotdog" placeholder="Search" />
				</div>
			</div> -->
		</div>
	</header>