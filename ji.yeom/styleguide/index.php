<!DOCTYPE html>
<html lang="en">
<head>

	<title>Style Guide</title>
	<?php include "../parts/meta.php" ?>

</head>

<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="card soft" style="background-color: #000">
				<h1 style="color: #fff">Style Guide of <span style="color: #1155CC">PIN</span> YOUR <span style="color: #5AFF5A">PINS</span></h1>
			</div>
		</div>
	</header>

	<nav class="container">
		<h3>Table of Contents</h3>
		<ul>
			<li><a href="#colors">Colors</a></li>
			<li><a href="#typography">Typography</a></li>
			<li><a href="#grids">Grid Systems</a></li>	
			<li><a href="#components">Components</a></li>
				<ul>		
					<li><a href="#buttons">Buttons</a></li>
					<li><a href="#forms">Input Forms</a></li>
<!-- 						<ul>
							<li>Text Box</li>
							<li>Dropdown</li>
							<li>Search Bar</li>

						</ul>	 -->
					<li><a href="#others">Other Components</a></li>
						<ul>
							<li>Boxes</li>
<!-- 							<li><a href="#paginationPage">Pagination Page</a></li>
							<li><a href="#paginationDot">Pagination Dot</a></li> -->
							<li>Cards</li>
							<li>Figures</li>
						</ul>
				</ul>
			<!-- <li><a href="#icons">Iconography</a></li>		 -->
			<li><a href="#ui">UI Elements</a></li>
				<ul>
					<li>Account Form</li>
					<li>Administration Table</li>
					<li>Navigation Bar</li>
				</ul>

		</ul>
	</nav>


<br>
<br>
	<section class="container">
		<h2 id="typography">Typography</h2>

		<div class="card soft">
			<h1 style="text-align: center">Ubuntu</h1>
			<hr>
<!-- 			<div class="card">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<div class="card">
						<h1>Heading 1</h1>
						<p>Bold<br>32px</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="card">
						<h2>Heading 2</h2>
						<p>Bold<br>22px</p>
					</div>	
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="card">
						<h3>Heading 3</h3>
						<p>Bold<br>22px</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="card">
						<h3>Heading 4</h3>
						<p>Bold<br>18px</p>
					</div>
				</div>
			</div>	
			</div> -->
			
			<div class="card">
				<div class="grid gap">
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<h1>Heading 1</h1>
						<p>Bold<br>32px</p>
					</div>
				</div>			
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<h2>Heading 2</h2>
						<p>Bold<br>22px</p>			
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<h3>Heading 3</h3>
						<p>Bold<br>22px</p>					
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<h4>Heading 4</h4>
						<p>Bold<br>18px</p>				
					</div>
				</div>
				</div>
			</div>
				
			<div class="card">
				<div class="grid gap">
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<h5>Heading 5</h5>
						<p>Bold<br>15px</p>					
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<p>Paragraphs</p>
						<p>Regular<br>15px</p>					
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="card">
						<p class="small-text">Small Text</p>
						<p>Regular<br>13px</p>					
					</div>
				</div>
				</div>
			</div>
		</div>	
		<!-- <div class="card soft">
			<h4 id="paragraphs">Paragraphs</h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quisquam saepe quae quam dolores rem omnis est recusandae ullam asperiores.</p>
			<p>Saepe ratione quidem neque dolores nobis harum cum, numquam, unde pariatur rem possimus itaque non recusandae tempora amet laudantium et.</p>
			<p>Ipsa officiis necessitatibus perspiciatis vero, porro soluta temporibus quod ut dignissimos earum a optio dolorum, pariatur sed harum quaerat! Deleniti.</p>
		</div>
		<div class="card soft">
			<h4 id="smalltext">Small Text</h4>
			<hr>
			<p class="small-text">Lorem ipsum dolor sit amet</p>
		</div> -->
	</section>


<br>
<br>
	<section class="container">
		<h2 id="colors">Colors</h2>

		<div class="card soft">
			<div class="grid gap">
				<div class="col-xs-12 col-md-3">
				<h5>Primary Color</h5>
					<div>
						<div class="square" style="background-color: #5aff5a">
					</div>
					<p>#5AFF5A</p>
					</div>
				</div>

				<div class="col-xs-12 col-md-3">
				<h5>Seconday Color</h5>
					<div>
						<div class="square" style="background-color: #1155cc">
					</div>
					<p>#1155CC</p>
					</div>
				</div>
			</div>

			<br>
			<h5>Text & Background Color</h5>
				<div class="grid gap">
					<div class="col-xs-12 col-md-3">
						<div>
							<div class="square" style="background-color: #eeeeee">
						</div>
						<p>#EEEEEE</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div>
							<div class="square" style="background-color: #bbbaba">
						</div>
						<p>#bbbaba</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div>
							<div class="square" style="background-color: #515151">
						</div>
						<p>#515151</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div>
							<div class="square" style="background-color: #000">
						</div>
						<p>#000</p>
						</div>	
					</div>
			</div>				
		</div>
	</section>


<br>
<br>
	<section class="container">
		<h2 id="grids">Grid Systems</h2>
		<div class="card soft">
			<h5>Grid-Column-2</h5>
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="rectangle"></div>
					</div>
				</div>
<br>
			<h5>Grid-Column-4</h5>
				<div class="grid gap">
					<div class="col-xs-12 col-md-3">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-3">				
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-3">				
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-3">				
						<div class="rectangle"></div>
					</div>
				</div>
<br>
			<h5>Grid-Column-6</h5>
				<div class="grid gap">
					<div class="col-xs-12 col-md-2">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-2">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-2">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-2">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-2">
						<div class="rectangle"></div>
					</div>
					<div class="col-xs-12 col-md-2">
						<div class="rectangle"></div>
					</div>
				</div>
		</div>
	</section>


<br>
<br>
	<section class="container">
	<h2 id="components">Components</h2>
		<h3 id="buttons">BUTTONS</h3>		
		<div class="card soft">
			<!-- <div class="card"> -->
				<div class="grid gap">
				<div class="col-xs-12 col-md-3">
					<h5>Primary Button</h5>
						<div class="form-control">
							<button type="button" class="form-button primary">BUTTON</button>
						</div>
						<p class="small-text">Usage: Add to Cart, Go to Checkout, Checkout</p>
				</div>

				<div class="col-xs-12 col-md-3">
					<h5>Secondary Button</h5>
					<div class="form-control">
						<button type="button" class="form-button secondary">BUTTON</button>
					</div>
					<p class="small-text">Usage: Shop All, Remove</p>					
				</div>

				<div class="col-xs-12 col-md-3">
					<h5>Third Button</h5>
					<div class="form-control">
						<button type="button" class="form-button third">BUTTON</button>
					</div>
					<p class="small-text">Usage: Continue Shopping, Apply</p>					
				</div>

				<div class="col-xs-12 col-md-3">
					<h5>Wishlist Button</h5>
					<button class="form-button secondary heart-toggle" 	data-children-count="1">
						<input type="checkbox" id="heart-example" class="hidden" onclick="alert('The item is added to your wishlist!')">
						<label for="heart-example">WISHLIST ♥</label>
					</button>
					<p class="small-text">Usage: Only for Wishlist 	button</p>
				</div>

<!-- 					<div class="form-control">
						<a href="#" class="form-button">Anchor</a>
					</div> -->
				</div>
			<!-- </div> -->
		</div>
	</section>


<br>
	<section class="container">
		<h3 id="forms">INPUT FORMS</h3>
		<div class="card soft">
			<div class="grid gap">
			<div class="col-xs-12 col-md-3">
				<h5>Input Textbox</h5>
					<input type="text" class="form-input" placeholder="Text">
			</div>
			
			<div class="col-xs-12 col-md-3">
				<h5>Error</h5>
					<input class="form-input error" placeholder="Error">
			</div>
<!-- 			<div class="card">
				<h5>Form Label</h5>
					<div class="form-control">
						<label class="form-label" for="input-example1">Title</label>
						<input type="text" class="form-input" placeholder="Text" id="input-example1">
					</div>
			</div> -->

			<div class="col-xs-12 col-md-3">
				<h5>Search Bar</h5>
				<div class="form-control">
					<label class="search-bar">
						<div class="flex-none icons">
							<i class="fa fa-search" style="color: #5AFF5A;"></i>
						</div>
						<div class="flex-stretch">
							<input type="search" placeholder="Search" />
						</div>
					</label>
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<h5>Dropdown</h5>
				<div class="form-select">			
					<select>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
			</div>
		</div>

		</div>
	</section>










<br>
<br>
	<section class="container">
		<h3 id="others">Other Components</h3>
		<div class="card soft">
			<h4 id="boxes">BOXES</h4>
			<hr>	
			<div class="grid gap">
				<div class="col-xs-12 col-md-3">					
					<h5>Checkbox</h5>
					<div>
						<label class="checkbox">Subscription
							<input type="checkbox" checked="checked">
							<span class="checkmark"></span>
							</label>
					</div>
				</div>

				<div class="col-xs-12 col-md-3">
					<h5>Switch/Toggle</h5>
					<div>
						<div class="toggle" data-children-count="1">
							<input type="checkbox" id="toggle1" class="hidden">
							<label for="toggle1"></label>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-3">
					<h5>Remove/Close</h5>
					<button class="xbox">
						<i class="fa fa-close"></i>
					</button>
				</div>	

			</div>


<br>
			<h4 id="cards">CARDS</h4>
			<hr>
			<div class="grid gap">
				<div class="col-xs-12 col-md-3">
					<div>
					<div class="card soft square">
					</div>
					<p>Card Soft</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div>
					<div class="card light square">
					</div>
					<p>Card Light</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div>
					<div class="card medium square">
					</div>
					<p>Card Medium</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div>
					<div class="card dark square">
					</div>
					<p>Card Dark</p>
					</div>
				</div>
			</div>

<br>
<br>
			<h4 id="figures">FIGURES</h4>
			<hr>
			<h5>Basic Figure</h5>
				<div>
					<figure class="product-figure">
						<img src="https://via.placeholder.com/300" alt="">
						<figcaption>Product</figcaption>
					</figure>
				</div>

			<br>
			<h5>Overlay Figure</h5>
			<a href="#" class="display-block"></a>
			<div>
				<!-- figure>img+figcaption -->
				<figure class="product-figure overlay">
					<img src="https://via.placeholder.com/300" alt="">
					<figcaption>Product</figcaption>
				</figure>
			</div>

			<br>
			<h5>Gridded Figures</h5>
			<div class="grid gap">
				<div class="col-xs-12 col-md-3">				
					<div>
						<figure class="product-figure">
							<img src="https://via.placeholder.com/300" alt="">
							<figcaption>Product</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">				
					<div>
						<figure class="product-figure">
							<img src="https://via.placeholder.com/300" alt="">
							<figcaption>Product</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">				
					<div>
						<figure class="product-figure">
							<img src="https://via.placeholder.com/300" alt="">
							<figcaption>Product</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">				
					<div>
						<figure class="product-figure">
							<img src="https://via.placeholder.com/300" alt="">
							<figcaption>Product</figcaption>
						</figure>
					</div>
				</div>
			</div>
			
<br>	
			<h5>Product Figures</h5>
				<div class="grid gap">
				<div class="col-xs-6 col-md-3">		
					<a href="#" class="display-block">		
						<figure class="product-figure soft">
							<div class="product-image"><img src="https://via.placeholder.com/250" alt=""></div>
							<figcaption class="product-description">
								<div class="product-price">&dollar;5</div>
								<div class="product-name">Product</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-6 col-md-3">		
					<a href="#" class="display-block">		
						<figure class="product-figure soft">
							<div class="product-image"><img src="https://via.placeholder.com/300" alt=""></div>
							<figcaption class="product-description">
								<div class="product-price">&dollar;10</div>
								<div class="product-name">Product</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-6 col-md-3">		
					<a href="#" class="display-block">		
						<figure class="product-figure soft">
							<div class="product-image"><img src="https://via.placeholder.com/200" alt=""></div>
							<figcaption class="product-description">
								<div class="product-price">&dollar;15</div>
								<div class="product-name">Product</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-6 col-md-3">		
					<a href="#" class="display-block">		
						<figure class="product-figure soft">
							<div class="product-image"><img src="https://via.placeholder.com/250" alt=""></div>
							<figcaption class="product-description">
								<div class="product-price">&dollar;20</div>
								<div class="product-name">Product</div>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
</div>
		</div>
	</section>


<!-- <br>
<br>
	<section class="container">
		<h2 id="#icons">Iconography</h2>
		<div class="card soft">	
			<h3>Icon</h3>

		</div>
	</section> -->


<br>
<br>
	<section class="container">
		<h2 id="ui">UI Elements</h2>
		<div class="card soft">

	<script>
		const makeTable = (classes='') => {
			const head = ['ID', 'Product No.','Product Name','Type','Price','Stock'];
			const body = [
			['142',"Pin 1",'Pin','$3.99','50'],
			['143',"Pin 2",'Pin','$3.99','50'],
			['144',"Patch 1",'Patch','$7.99','10'],
			];

			// let ran = Math.floor(Math.random()*links.length);
			return `
			<table class="${classes}">
			<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
			<tbody>${body.reduce((r,o,i)=>r+
				`<tr>${
					[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
				}</tr>`,'')
		}</tbody>
		</table>
		`;
	}
	</script>

		<h4 id="forms">Forms</h4>
		<hr>
<!-- 		<div class="card">
			<h5>Form Input</h5>
				<input type="text" class="form-input" placeholder="Text">
				<input type="password" class="form-input" placeholder="Password">
				<input type="number" class="form-input" placeholder="Number">
				<input type="search" class="form-input" placeholder="Search">
		</div> -->

<!-- 		<div class="card">
			<h5>Form Label</h5>
				<label class="form-label" for="input-example1">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">

				<label class="form-label" for="input-example2">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example2">

				<label class="form-label" for="input-example3">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example3">
		</div> -->

		<div class="card">
			<h5>Create an account</h5>
				<div class="form-control">
					<label class="form-label" for="input-example3">Username</label>
					<input type="text" class="form-input" placeholder="Username">
				</div>
				<div class="form-control">
					<label class="form-label" for="input-example3">Password</label>
					<input type="text" class="form-input" placeholder="Password">
				</div>
				<div class="form-control">
					<label class="form-label" for="input-example3">Email</label>
					<input type="text" class="form-input" placeholder="Email">	
				</div>
			</div>

<br>
		<div class="card">
			<h5>Shipping Information</h5>
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<label class="form-label" for="input-example1">First Name</label>
					<input type="text" class="form-input" placeholder="First Name">
				</div>
				<div class="col-xs-12 col-md-6">
						<label class="form-label" for="input-example2">Last Name</label>
						<input type="text" class="form-input" placeholder="Last Name">
				</div>
			</div>
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<div class="form-control">
						<label class="form-label" for="input-example3">Address</label>
						<input type="text" class="form-input" placeholder="Address">
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="form-control">
						<label class="form-label" for="input-example3">Address 2 (optional)</label>
						<input type="text" class="form-input" placeholder="Apartment, suite, etc.">
					</div>
				</div>
			</div>
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<label class="form-label" for="input-example3">City</label>
					<input type="text" class="form-input" placeholder="City">
				</div>
				<div class="col-xs-12 col-md-4">
					<label class="form-label" for="input-example3">State</label>
					<input type="text" class="form-input" placeholder="State">
				</div>
				<div class="col-xs-12 col-md-4">
					<label class="form-label" for="input-example3">Zipcode</label>
					<input type="text" class="form-input" placeholder="Zipcode">
				</div>	
			</div>
			<div class="form-control">
				<label class="form-label" for="input-example3">Phone</label>
				<input type="tel" class="form-input" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
			</div>
		</div>

<br>
		<div class="card">
			<h5>Payment</h5>
				<div class="form-control">
					<label class="form-label" for="input-example1">Name on card</label>
					<input type="text" class="form-input" placeholder="e.g. Julie Smith">
				</div>
				<div class="form-control">
					<label class="form-label" for="input-example2">Card Number</label>
					<input type="text" class="form-input" placeholder="0000 0000 0000 0000">
				</div>
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<label class="form-label" for="input-example1">Expiry Date</label>
					<input type="text" class="form-input" placeholder="MM/YYYY">
				</div>
				<div class="col-xs-12 col-md-6">
					<label class="form-label" for="input-example2">Security Code</label>
					<input type="text" class="form-input" placeholder="000">
				</div>
			</div>
	</div>

<br>
<br>
		<h4>NAVIGATION BARS</h4>
		<hr>
			<h5>Checkout Table</h5>
				<script>document.write(makeTable('table lined horizontal striped'))</script>
<br>
<br>
			<h5>Administration Table</h5>
				<script>document.write(makeTable('table lined all striped'))</script>

		<script>
			const makeNav = (classes='') => {
				const links = ['STORE','ABOUT','ACCOUNT','CART'];
				let ran = Math.floor(Math.random()*links.length);
				return `
				<div>
					<nav class="${classes}">
						<ul>
						${links.reduce((r,o,i)=>{
						return r+`<li class="${ran==i?'active':''}">
						<a href="#">${o}</a>
						</li>`;
						},'')}
						</ul>
					</nav>
				</div>
				`;
			}
		</script>

<br>
<br>
		<h4>NAVIGATION BARS</h4>
		<hr>
<!-- 			<h5>Basic Nav</h5>
			<script>document.write(makeNav("nav"))</script>
<br>
<br> -->
			<h5>Flex Nav</h5>
				<script>document.write(makeNav("nav-flex"))</script>
<!-- 		<div>
				<nav class="nav-flex">
					<ul>
						<li class="active">
							<a href="#">STORE</a>
						</li>
						<li class="">
							<a href="#">ABOUT</a>
						</li>
						<li class="">
							<a href="#">ACCOUT</a>
						</li>
						<li class="">
							<a href="#">CART</a>
						</li>
					</ul>
				</nav>
			</div> -->
<br>
<br>
			<h5>Stretch Nav</h5>
				<script>document.write(makeNav("nav-stretch"))</script>
<br>
<br>
			<h5>Breadcrumb Nav</h5>
				<script>document.write(makeNav("nav-crumbs"))</script>
					<br>
					<!-- <nav class="nav-crumbs"></nav>	 -->


		<script>
			$("[class^='nav'] a").on("click",function(e){
				e.preventDefault();
				$(this).closest('li').addClass("active")
					.siblings().removeClass("active")
			})
		</script>

		</div>
	</section>
	
	<footer class="navbar">
	<div class="container display-flex flex-justify-center">
		<p class="small-text">
			<a href="index.php">© 2020 PIN YOUR PINS</a>
		</p>
	</div>
	</footer>

</body>
</html>