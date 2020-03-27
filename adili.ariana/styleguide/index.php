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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&display=swap" rel="stylesheet">
</head>
<body>

	<header class="container">
		<div class="card">
			<h1>Begari</h1>
		</div>
	</header>

	<nav class="container">
		<h2>Items</h2>
		<ul>
			<!-- <li><a href="Buy used clothing"></a></li> -->
			<h2>Clothing & Footwear</h2>
			<ul>
				<li><a href="#formal">Formal</a></li>
				<li><a href="#casual">Casual</a></li>
			</ul>
			

		</ul>
	</nav>

	<section class="container">
		<h2 id="clothing">Sell your clothing</h2>

		<div class="card">
			<h3 id="headings"></h3>
			<hr>
			<!-- h$*6>{Heading $} -->
			<h1>Affordable name brand items</h1>
			<ul>
				<li>Nike</li>
				<li>Adidas</li>
				<li>Express</li>
				<li>Lacoste</li>
				<li>H&M</li>
			</ul>
		</div>

		<div class="card">
			<h3 id="about">About us</h3>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ducimus omnis nam dolores explicabo eum, ab provident unde quas atque.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis officiis et eos illum in. Quis velit itaque reiciendis minima, asperiores.</p>
		</div>
	</section>



	<section class="container">
		<h2 id="navigations">Navigations</h2>

	<script>
	const makeNav = (classes='') => {
		const links = ['home','shop','last call'];
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

		<div class="card">
			<h3>Basic Nav</h3>

			<script>document.write(makeNav("nav"))</script>
		</div>
		<div class="card">
			<h3>Flex Nav</h3>

			<script>document.write(makeNav("nav-flex"))</script>
		</div>
		<!-- <div class="card">
			<h3>Stretch Nav</h3>

			<script>document.write(makeNav("nav-stretch"))</script>
		</div> -->
		<!-- <div class="card">
			<h3>Pills Nav</h3>

			<script>document.write(makeNav("nav-pills"))</script>
		</div> -->
		
		<div class="card">
			<h2>Form Control</h2>

			<div class="form-control">
				<label class="form-label" for="input-example1">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>

			<div class="form-control">
				<label class="form-label" for="input-example2">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example2">
			</div>

			<div class="form-control">
				<label class="form-label" for="input-example3">Example</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example3">
			</div>
		</div>

		<div class="card">
			<h2>Form Button</h2>

			<div class="form-control">
				<input type="submit" class="form-button"/>
			</div>

			<div class="form-control">
				<button type="button" class="form-button">Preview</button>
			</div>

			<div class="form-control">
				<button type="button" class="form-button">Submit</button>
			</div>
	</div>

		<div class="card">
			<h2>Search</h2>
			
			<div class="form-control">
				<input type="search" class="hotdog" placeholder="Search" />
			</div>
			
			<div class="form-control">
				<label class="hotdog">
					<div class="flex-none icon">
						🔍
					</div>
					<div class="flex-stretch">
						<input type="search" placeholder="Search" />
					</div>
				</label>
			</div>
		</div>
	</section>



	


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
	$("[class^='nav'] a").on("click",function(e){
		e.preventDefault();
		$(this).closest('li').addClass("active")
	})
	</script>
	
	</body>
</html>