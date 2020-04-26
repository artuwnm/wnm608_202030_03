<?php
include_once "parts/templates.php";
?><header class="navbar">
	
		<div class="container display-flex">
			<!-- <div class="flex-stretch">
				<h1>Store Page</h1>
			</div> -->
			<nav class="nav flex-none">
				<!-- ul>li*3>a[href=#]>{Link $} -->
				
				<div class="container">
					
					<div class="row">
						<div class="col-md-3 col-xs-2 hidden-xs menu-1">
							<ul class="display-flex1">
								<li><a href="product_about.php">About</a></li>
								<li><a href="product_list.php">Shop</a></li>
								<li><a href="product_contact.php">Contact</a></li>
							</ul>
						</div>


						<div class="col-md-6 col-xs-6 text-center">
							<div class="flex-stretch">
								<!-- <img src="img/logo.png" alt=""> -->
								<!-- http://www.badtrista.com/aau/wnm608/tu.yunhua/Otoro/ -->
								<a href="product_home.php"><img src="img/logo.png" alt=""></a>
							</div>
						</div>


						<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
							<ul class="display-flex2">
								<li><a href="product_publish.php">Publish</a></li>
								<li><a href="product_login.php">Login</a></li>
								<li><a href="product_cart.php">
									Cart
									<span class="badge"><?= makeCartBadge(); ?></span>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>