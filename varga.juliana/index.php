<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>
</header>
  <br>

<br>

 <img src="images/banner.jpg" class="responsive">
 <br>

<div class="container">
		
		<div class="grid gap">
			<!-- .col-xs-6*2>.card.soft>lorem30 -->
			<div class="col-xs-12 col-md-12">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem beatae quos impedit, natus nostrum odio voluptas a ullam voluptatem nam amet, rem facere accusantium fuga facilis laboriosam nihil soluta placeat.</div>
			</div>
		</div>
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