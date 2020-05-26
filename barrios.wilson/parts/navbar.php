
<?php
include_once "lib/php/functions.php";
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
	<div id="logo-header" class="flex-stretch"><a href="index.php"><img class="logo" src="img/coolkeychains-logo.png" alt="CoolKeychains"></a></div>

		<ul class= "nav-pills" id="nav">
			<li><a href="index.php">HOME</a></li>

			<li><a href="about.php">ABOUT</a></li>

			<li><a href="product_list.php">STORE</a></li>

			<li><a href="contact.php">CONTACT</a></li>

			<li><a href="admin/index.php"><img class="icon" src="img/admin.png" alt="user"></a></li>

			<li><a href="product_cart.php"><img class="icon" src="img/cart.png" alt="cart"><span class="badge"><?= makeCartBadge();?></span></a></div></li>
				
		</ul>
	</div>


</header>