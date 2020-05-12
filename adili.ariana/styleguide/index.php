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
</head>
<body>

	<header class="container">
		<div class="card">
			<h1>Begari | Men's clothing</h1>
		</div>
	</header>

	<nav class="container">
		<h2>Items to buy</h2>
		<ul>
			<ul>
				<li><a href="#formal">Jackets</a></li>
				<li><a href="#casual">Shirts</a></li>
				<li><a href="#casual">Shoes</a></li>
			</ul>
		</ul>

	</nav>

	<section class="container">
		<!-- <h2 id="clothing">Buy men's clothing</h2> -->

		<div class="card">
			<h1>Fonts</h1>

			<!-- <h3 id="headings"></h3> -->
			<hr>
			<!-- h$*6>{Heading $} -->
	
			<ul>
				<p>Begari logo | Tenor Sans</p>
				<p>Body | Montserrat</p>
			</ul>
		</div>

		<div class="card">
			<h3 id="about">About us</h3>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit suscipit consectetur illo voluptas fuga ipsam labore veniam unde, excepturi at voluptate mollitia officiis aut soluta eaque necessitatibus ab a in et quos enim molestiae nulla. Blanditiis quos molestias, rem ipsam delectus veniam, voluptates voluptas ex illo explicabo fugit praesentium minima.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, explicabo aperiam ipsa illum enim id impedit eius repellendus veritatis rem perspiciatis quas ex libero ipsam animi cumque quos, perferendis quo eum debitis quasi quam veniam neque. Omnis excepturi obcaecati nisi repudiandae, eum possimus modi. Illo eligendi exercitationem, iusto saepe eos!</p>
		</div>
	</section>



	<section class="container">
		<h2 id="navigations">Navigations</h2>

	<script>
	const makeNav = (classes='') => {
		const links = ['home','store','about'];
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
		<div class="card">
			<h3>Stretch Nav</h3>

			<script>document.write(makeNav("nav-stretch"))</script>
		</div>
		<div class="card">
			<h3>Pills Nav</h3>

			<script>document.write(makeNav("nav-pills"))</script>
		</div>
		<div class="card">
			<h3>Breadcrumb Nav</h3>

			<script>document.write(makeNav("nav-crumbs"))</script>
		</div>

		<div class="card-selction">
			<label class="form-label">Amount</label>
			<div class="form-select">
				<select name="amount">
					<option value="">
						<1></1>
					</option>
					<option value="">
						<2></2>
					</option>
					<option value="">
						<3></3>
					</option>
					<option value="">
						<4></4>
					</option>
					<option value="">
						<5></5>
					</option>
					<option value="">
						<6></6>
					</option>
					<option value="">
						<7></7>
					</option>
					<option value="">
						<8></8>
					</option>
					<option value="">
						<9></9>
					</option>
					<option value="">
						<10></10>
					</option>
			</select>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
	$("[class^='nav'] a").on("click",function(e){
		e.preventDefault();
		$(this).closest('li').addClass("active")
	
	</body>
</html>