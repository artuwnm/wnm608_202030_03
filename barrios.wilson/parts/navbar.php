
<?php
include_once "parts/templates.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<header class="navbar-top">
</header>

<header class="navbar">
		<div class="container display-flex">
			<div id="page-nav" class="nav-flex flex-none">

<!--Hamburger Menu-->

<label for= "hamburger">&#9776;</label>
<input type="checkbox" id="hamburger"/>
<div id="logo-header" class="flex-stretch"><a href="index.php"><img class="logo" src="https://wbarrios.com/aau/wnm608/barrios.wilson/img/coolkeychains-logo.png" alt="CoolKeychains"></a></div>

	<ul class= "nav-pills">
		<li><a href="https://wbarrios.com/aau/wnm608/barrios.wilson/index.php">HOME</a></li>

		<li><a href="https://wbarrios.com/aau/wnm608/barrios.wilson/about.php">ABOUT</a></li>

		<li><a href="https://wbarrios.com/aau/wnm608/barrios.wilson/product_list.php">STORE</a></li>

		<li><a href="https://wbarrios.com/aau/wnm608/barrios.wilson/contact.php">CONTACT</a></li>

		<li><a href="https://wbarrios.com/aau/wnm608/barrios.wilson/login.php"><img class="icon" src="https://wbarrios.com/aau/wnm608/barrios.wilson/img/user.png" alt="user"></a></li>

		<li><a href="https://wbarrios.com/aau/wnm608/barrios.wilson/product_cart.php"><img class="icon" src="https://wbarrios.com/aau/wnm608/barrios.wilson/img/shopping-cart.png" alt="cart">
			 <span class="badge"><?= makeCartBadge();?></span></a></li>
				

	</ul>

		</nav>
	</div>

</header>