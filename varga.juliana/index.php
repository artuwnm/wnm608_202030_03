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

		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<div class="card flat">
				<img src="images/banner_01.jpg">
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="card flat">
				<img src="images/banner_02.jpg">
				</div>
			</div>
		</div>

<br>

 <img src="images/banner.jpg" class="responsive">
</div>

 <br>

<div class="container">
		
		<br>
		<br>
			
			<div class="container">
		<h2>New Necklaces</h2>
		<?php recommendedCategory('necklace') ?>
	</div>
	<div class="container">
		<h2>New Rings</h2>
		<?php recommendedCategory('ring') ?>
	</div>
</div>
	
	<?php include "parts/footer.php" ?>
</body>
</html>