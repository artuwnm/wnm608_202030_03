<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Begari | Men's clothing</title>

	<?php include __DIR__."/parts/meta.php" ?>

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<?php include "parts/navbar.php" ?>

	<!-- header.navbar>h1+nav.nav -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Begari!</h1>
			</div>
			<nav class="nav flex-none">
				<!-- ul>li*3>a[href=#]>{Link $} -->
				<ul class="display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="productlist.php">Store</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- .container>p*2>lorem30 -->
	<div class="container">
		<div class="card soft">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum magni dolor aspernatur vero repudiandae porro ab accusamus nostrum, quibusdam, possimus vel dolorem nemo eos exercitationem. Impedit laboriosam commodi, at.</p>
			<p>Sed atque, molestiae aperiam voluptatum deleniti quis amet mollitia! Aliquam amet eius molestias dignissimos nesciunt tempore voluptate sunt voluptatibus praesentium, aut deleniti animi officiis ipsa quam unde, similique quasi adipisci.</p>
		</div>
		<div class="container2">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum magni dolor aspernatur vero repudiandae porro ab accusamus nostrum, quibusdam, possimus vel dolorem nemo eos exercitationem. Impedit laboriosam commodi, at.</p>
			<p>Sed atque, molestiae aperiam voluptatum deleniti quis amet mollitia! Aliquam amet eius molestias dignissimos nesciunt tempore voluptate sunt voluptatibus praesentium, aut deleniti animi officiis ipsa quam unde, similique quasi adipisci.</p>
		</div>
	</div>

			
</body>
</html>