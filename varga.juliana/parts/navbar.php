
<?php
include_once "parts/templates.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</div>

<header class="navbar-top">
</header>

<header class="navbar">
		<div class="container display-flex">
			<div id="page-nav" class="nav-flex flex-none">

<!--Hamburger Menu-->

<label for= "hamburger">&#9776;</label>
<input type="checkbox" id="hamburger"/>
<div id="logo-header" class="flex-stretch"><a href="index.php"><img class="logo" src="images/logo.png" alt="jvjewlery"></a></div>

	<ul class= "nav-pills">
		<li><a href="index.php">Home</a></li>

		<li><a href="product_list.php">Store</a></li>

		<li><a href="about.php">About Us</a></li>

		<li><a href="product_cart.php"><i style="font-size:24px" class="fa">&#xf07a;</i> Cart
			 <span class="badge"><?= makeCartBadge();?></span></a></li>
				

	</ul>

		</nav>
	</div>


</header>
<div class="container">
<hr>
</div>