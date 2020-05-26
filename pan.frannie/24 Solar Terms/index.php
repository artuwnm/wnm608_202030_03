<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>24 SOLAR TERMS</title>


	<?php include "parts/meta.php" ?>

</head>

<body>

    <?php include "parts/navbar.php" ?>




    <!-- Big Advertisement -->

    <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url('img/homead.jpg')">
		<div class="theme">
			<h1>The 24 Solar Terms</h1>
			<h2>A specific knowledge continuum of time for Chinese people</h2>

			<div class="btnstyle Explore">
                <button class="btn first"><a href="about.php">Explore More</a></button>
            </div>
		</div>

	</div>

	<!-- .container>p*2>lorem30 -->
	<div class="container">
		
		<div class="introtext">
			<p>24 Solar Terms is a theme store located in downtown San Francisco, USA. The theme of the store is 24 solar terms, with the goal of cultural inheritance and integration into contemporary life. It integrates traditional culture with modern aesthetics to provide customers with a selection of specialty goods, such as calendars, clocks, canvas bags, and so on.</p>
		</div>

	</div>




	<div class="container">
		<h2>Hot Products</h2>

		<div class="grid">
			<!-- .col-xs-6*2>.card.soft>lorem30 -->
			<div class="col-xs-12 col-xl-6">
				<a class="hotproduct"><img src="img/ProductBig1.jpg" alt="ProductBig1"></a>
			</div>

			<div class="col-xs-12 col-xl-6">
				<a class="hotproduct"><img src="img/ProductBig2.jpg" alt="ProductBig2"></a></div>
		</div>
			

	    <div class="grid">
			<!-- .col-xs-6*2>.card.soft>lorem30 -->
			<div class="col-xs-12 col-xl-6">
				<a class="hotproduct"><img src="img/ProductBig3.jpg" alt="ProductBig3"></a>
			</div>

			<div class="col-xs-12 col-xl-6">
				<a class="hotproduct"><img src="img/ProductBig4.jpg" alt="ProductBig4"></a></div>
		</div>


	</div>





    <?php include "parts/footer.php" ?>


</body>
</html>



