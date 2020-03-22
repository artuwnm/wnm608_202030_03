<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store: Product Item</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Store</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="#">Home</a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<div>
				The item is #<?= $_GET['id'] ?>
			</div>
		</div>
	</div>
	
</body>
</html>