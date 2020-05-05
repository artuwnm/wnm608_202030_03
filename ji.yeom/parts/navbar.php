
<?php
include_once "parts/templates.php"

?>

<header class="navbar">
	<div class="container display-flex">
		<a class="logo" href="index.php">
				<img src="img/logo.png" alt="logo">
		</a>
		
		<div class="navigation">
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li>
						<a href="product_list.php">Product</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="wrap display-inline-flex">
			<ul class="icon display-flex">
				<li>
					<a href="sign_in.php">
						<img src="img/sign-in.jpg" alt="sign-in">
					</a>
				</li>
				<li>
					<a href="product_cart.php">
						<img src="img/cart.jpg" alt="cart">
							<span class="badge"><?= makeCartBadge(); ?></span>
					</a>
				</li>
			</ul>
		</div>

	</div>
</header>




