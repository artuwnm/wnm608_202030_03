<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Style Guide</title>

	<!-- meta:vp -->
	<meta name="viewport" content="width=device-width">


	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">
	<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
</head>
<body>

	<header class="container">
		<div class="card">
			<h1>Begari | Men's clothing</h1>
		</div>
	</header>


	<section class="container">
		<!-- <h2 id="clothing">Buy men's clothing</h2> -->

	<div class="card">
			<h1>Items to buy</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p>Shoes</p>
				<p>Shirts</p>
				<p>Jackets</p>
			</ul>
		</div>

		<div class="card">
			<h1>Typography</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p><b>Logo and heading |</b>  Tenor Sans</p>
				<p><b>Body |</b> Montserrat</p>
			</ul>
		</div>

		<div class="card">
			<h1>Paragraphs | Code</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p>font-family: 'Montserrat';</p>
				<p>font-size: 1rem;</p>
				<p>font-weight: normal;</p>
				<p>color: white;</p>
			</ul>
		</div>


<div class="card">
			<h1>Color palette</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p><b>Background color & cards |</b>  White | #FFFFFF</p>
				<p><b>Cards code | </b> box-shadow: 6px 5px 15px 10px rgba(0, 0, 0, 0.1); border-radius:0.3em; | #000000</p>
			</ul>
		</div>


<div class="card">
			<h1>Nav bar | Main</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
		<header class="navbar">
			<div class="container display-flex">
				<div class="flex-stretch">
			<h1>LOGO</h1>
		</div>
		<nav class="nav-flex flex-none">
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">STORE</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">CART</a></li>
			</ul>
		</nav>
	</div>
</header>
</div>






	<div class="card">
			<h1>Navigation | Crumbs</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p>	<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>

			</ul>
		</nav></p>
			</ul>
		</div>




<div class="card">
			<h1>Images</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p><b>Folder |</b>  wnm608_202030_03/adili.ariana/images/</p>
			</ul>
</div>


	<div class="card">
	<h1>Product figures</h1>
	<hr>
	<div class="grid gap">
		<div class="col-xs-6 col-md-4">
	
<a href="#" class="display-block">
	<figure class="product-figure soft">
			<div class="product-image"><img src="https://via.placeholder.com/300" alt=""></div>
			<figcaption class="product-description">
			<div class="product-title">Product</div>
		</figcaption>
</figure>
				</a>
			</div>
			<div class="col-xs-6 col-md-4">
				<a href="#" class="display-block">
					<figure class="product-figure soft">
						<div class="product-image"><img src="https://via.placeholder.com/250" alt=""></div>
						<figcaption class="product-description">
							<div class="product-title">Product</div>
						</figcaption>
					</figure>
				</a>
			</div>
		</div>
	</section>
</div>



<div class="card">
			<h1>Forms</h1>
			<hr>
			<div class="card soft">
					<a class="form-button" href="#">Checkout</a>
				</div>
			</ul>


			<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
		</div>
</div>


<div class="card">
	<form class="form">
		<h1>Payment form</h1>
		<h2>Payment Type</h2>
			<div class="form-control">
				<label for="checkout-card-name" class="form-label">Name On Card</label>
				<input type="text" class="form-input" name="checkout-card-name">
				</div>
				<div class="form-control">
				<label for="checkout-card-number" class="form-label">Credit Card Number</label>
				<input type="text" class="form-input" name="checkout-card-number">
		</div>
			<div class="form-control">
			<label for="checkout-card-expirationmonth" class="form-label">Expiration Month</label>
			<input type="text" class="form-input" name="checkout-card-expirationmonth">
	</div>
		<div class="form-control">
		<label for="checkout-card-expirationyear" class="form-label">Expiration Year</label>
		<input type="text" class="form-input" name="checkout-card-expirationyear">
	</div>
		<div class="form-control">
			<label for="checkout-card-cvv" class="form-label">CVV</label>
			<input type="text" class="form-input" name="checkout-card-cvv">
	</div>

	<h2>Billing Address</h2>
		<div class="form-control">
		<label for="checkout-name" class="form-label">Full Name</label>
			<input type="text" class="form-input" name="checkout-name">
		</div>
		<div class="form-control">
		<label for="checkout-email" class="form-label">Email</label>
							<input type="email" class="form-input" name="checkout-email">
						</div>
						<div class="form-control">
							<label for="checkout-street" class="form-label">Street</label>
							<input type="text" class="form-input" name="checkout-street">
						</div>
						<div class="form-control">
							<label for="checkout-city" class="form-label">City</label>
							<input type="text" class="form-input" name="checkout-city">
						</div>
						<div class="form-control">
							<label for="checkout-state" class="form-label">State</label>
							<input type="text" class="form-input" name="checkout-state">
						</div>
						<div class="form-control">
							<label for="checkout-zip" class="form-label">Zip Code</label>
							<input type="text" class="form-input" name="checkout-zip">
						</div>
					</form>
				</div>
			</div>
		</div>
	
	</body>
</html>