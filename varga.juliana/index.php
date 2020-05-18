<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title> Jv Jewelry</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>
</header>

<div class="container">

		<div class="grid gap small">
			<div class="col-xs-12 col-md-6">
				<div class="card flat">
				<img src="images/banner_01.jpg" style="cursor:pointer">
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="card flat">
				<img src="images/banner_02.jpg" style="cursor:pointer">
				</div>
			</div>
		</div>
</div>
<div class="container">
		<br>
<div class="container">
		<br>
		<h4 style="text-align: center"> NECKLACES </h4>
		<p style="text-align: center">Choose a beautiful necklace she'll want to wear again and again.</p>
		<?php recommendedCategory('necklace') ?>
	</div>

<div class="container">
 <div class="grid gap">
			<div class="responsive">
				<a href="product_list.php"><img src="images/engagementsale.jpg" style="cursor: pointer;height: 490px"></a>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="responsive">
				<a href="product_list.php"><img src="images/newcollection.jpg" style="cursor: pointer;height: 490px"></a>
				</div>
			</div>
		</div>
 </div>

	<div class="container">
		<br>
		<h4 style="text-align: center">IT'S TRUE LOVE </h4>
		<p style="text-align: center">Celebrate your relationship with an anniversary gift that will last a lifetime, just like your love.</p>
		<?php recommendedCategory('ring') ?>
	</div>
</div>
	
	<?php include "parts/footer.php" ?>
</body>
</html>