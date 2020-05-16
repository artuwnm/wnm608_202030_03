<?php
include_once "templates.php";
?>

<header id="nav">

	<img src="img/logo-compressor.png" id="logo" height="50" width="217">
</div>
<div>
	<nav>
		
			<ul class="nav ">
				<!-- li*3>a[href=#]>{Link $} -->
				<li class="nav1 col-xs-1 col-md-3"><a href="index.php">HOME</a></li>
				<li class="nav2 col-xs-1 col-md-3"><a href="product_list.php">PRODUCT</a></li>
				<li class="nav3 col-xs-1 col-md-3"><a href="contact.php">CONTACT</a></li>
				
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