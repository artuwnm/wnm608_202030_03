<?php
include_once "parts/templates.php";
?>

	<header class="navbar">
		<div class="container display-flex">
			<div class="navbarlogo">
				<a class="navbarlogo" href="index.php">
                <img src="img/Logo2.png" alt="Logo" style="width:40%;">
                </a>
			</div>

            <div class="navigation">
			    <nav class="nav flex-none">

				    <ul class="display-flex">
					    <li><a href="product_list.php">PRODUCT</a></li>
				        <li><a href="about.php">ABOUT</a></li>
					    <li><a href="contact.php">CONTACT</a></li>
				    </ul>
			    </nav>

		    </div>


			<div class="wrap display-inline-flex">
                    <form action="" autocomplete="on">
                        <input id="search" name="search" type="text" placeholder="Search"><input id="search_submit" value="lens" type="go">
                    </form>
            </div>



            <div class="carticon">
		    	<a class="carticon" href="product_cart.php">
		    		<span><img src="img/iconcart.png" alt="cart"></span>
		    		<span class="badge"><?= makeCartBadge(); ?></span> 
                    
		    	</a>

		    </div>


		</div>
	</header>