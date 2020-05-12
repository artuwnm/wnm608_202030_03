
<?php
include_once "parts/templates.php"

?>

<!-- <header class="navbar">
	<div class="container display-flex">
		<a class="logo" href="index.php">
			<img src="img/logo.png" alt="logo">
		</a>

		<nav class="nav flex-stretch">
			<ul class="display-flex flex-justify-center" style="padding-top: 5px">
				<li>
					<a href="product_list.php">PRODUCT</a>
				</li>
				<li>
					<a href="about.php">ABOUT</a>
				</li>
				<li>
					<a href="contact.php">CONTACT</a>
				</li>
				<li>
						<a href="sign_in.php">
						<i class="material-icons icon" style="font-size:25px; color:#fff; padding-top: 10px;">person</i>
						</a>
				</li>
				<li>
						<a href="product_cart.php.php">
						<i class="fa fa-shopping-cart icon" style="font-size:20px; color:#fff;"></i>
						<span class="badge icon"><?= makeCartBadge(); ?></span>
						</a>
				</li>
			</ul>
		</nav>
	</div> -->


<!-- refer to https://www.w3schools.com/howto/howto_js_topnav_responsive.asp -->
<header class="navbar">
	<div class="container">	
			<div class="topnav" style="padding-top: 20px" id="myTopnav">
				<a class="logo" href="index.php">
				<img src="img/logo.png" alt="logo">
				</a>
			<!-- <div class="right"> -->
				<a href="product_list.php">SHOP</a>
				<a href="about.php">ABOUT</a>
				<a href="contact.php">CONTACT</a>
				<a href="sign_in.php">LOGIN</a>
				<a href="product_cart.php">CART
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars" style="font-size:20px;"></i>
				</a>
			</div>
	</div>

	<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
	</script>

</header>

