<?php
include_once "templates.php";
?>

<header id="nav">
<div class="col-3 col-xs-4 col-sm-1 col-md-4 col-lg-3 col-xl-3">
	<img src="img/logo-compressor.png" id="logo" height="50" width="217">
</div>
<div class="col-3 col-xs-4 col-sm-1 col-md-4 col-lg-3 col-xl-3">
	<nav>
		
			<ul class="nav">
				<!-- li*3>a[href=#]>{Link $} -->
				<li><a href="index.php">HOME</a></li>
				<li><a href="product_list.php">PRODUCT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li id="shoppingbag"><a id="haha" href="product_cart.php">
					<span>SHOPPING BAG</span>
					<span class="badge"><?= makeCartBadge(); ?>
				</span>
				</a></li>
			</ul>
	</nav>
</div>
<div class="clear"></div>
</header>