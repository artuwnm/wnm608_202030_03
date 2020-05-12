<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throw Pillows</title>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300|Oxanium:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

	
</head>
<body>
    <!-- header.navbar>h1+nav.nav -->
	<header class="navbar" id="navbar">
        <!-- remove container class here -->
		<div class="display-flex">
			<nav class="nav flex-none">
				<div class="logo">
					<a href="index.html">
                        <img src="img/logo-white.png" alt="" style="width: 15%;">
                    </a>
				</div>
				<div class="Search">
					<input type="text" placeholder="Search..">
				</div>
				<!-- moved the search div out of the unordered list tag. having it inside the tag was preventing spacing -->
				<ul  class="display-flex">
					<li  class="dropdown">
						<a href="home-decor.html" class="dropbtn">Home Decor</a>
						<div  class="dropdown-content">
							<a href="throw-pillows.html">Throw Pillows</a>
							<a href="">Wall Clocks</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropbtn">Tech</a>
						<div  class="dropdown-content">
							<a href="#">Phone Cases</a>
							<a href="#">Pad Cases</a>
							<a href="#">Mouse Pad</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropbtn">Tabletop</a>
						<div  class="dropdown-content">
							<a href="#">Mugs</a>
							<a href="#">Placemats</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropbtn">Stationery</a>
						<div  class="dropdown-content">
							<a href="#">Notebooks</a>
							<a href="#">Postercards</a>
							<a href="#">Stickers</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="dropbtn">Wall Art</a>
					</li>
				</ul>
			</nav>	
		</div>
    </header>
    <!-- dropdown -->
	<div class="content">
        <ul class="breadcrumb">
            <li><a href="#">Home Decor</a></li>
            <li><a href="#">Throw Pillows</a></li>    
            <li>Mango Planet</li>   
		</ul>
		<div class="product-img">
			<img src="img/throw-pillow-1.jpg" alt="">
		</div>   
		<div class="?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="/images/store/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='/images/store/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<h2><?= $o->title ?></h2>
						<div class="product-description">
							<div class="product-price">&dollar;<?= $o->price ?></div>
						</div>
					</div>
					<div class="card-section">
						<label class="form-label">Amount</label>
						<select name="amount" class="form-input">
							<!-- option*10>{$} -->
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							<option value="">6</option>
							<option value="">7</option>
							<option value="">8</option>
							<option value="">9</option>
							<option value="">10</option>
						</select>
					</div>
					<div class="card-section">
						<a class="form-button" href="product_added_to_cart.php">Add To Cart</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card soft dark">
			<h3>Description</h3>
			<div><?= $o->description ?></div>
		</div>
	</div>
	
</body>
			<p>Mango Planet Throw Pillow</p>
			<h3>$20.45</h3>
			<h4>size</h4>
			
		</div>
		<button class="add-cart-large">Add To Cart</button>

		
		<div id="cart">
			<img src="/img/cart.png" alt="">
			<span class="empty">No items in cart.</span>       
		</div>
	<script src="js/cart.js"></script>
	</div>