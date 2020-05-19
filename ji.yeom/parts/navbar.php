
<?php
include_once "parts/templates.php"

?>


<!-- refer to https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav -->
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

