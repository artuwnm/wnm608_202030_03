
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
<div id="logo-header" class="flex-stretch"><a href="index.php"><img class="logo" src="img/coolkeychains-logo.png" alt="CoolKeychains"></a></div>

	<ul class= "nav-pills">
		<li><a href="./product_list.php">STORE</a></li>

		<li><a href="admin/">PRODUCT LIST</a></li>

		<li><a href="admin/?id=new">ADD NEW PRODUCT</a></li>

	</ul>

		</nav>
	</div>

</header>