<?php

session_start();

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();
// print_p($cartItems);

?>

<!DOCTYPE html>
<html>
<head>
		<title>Bag Page</title>
	    <?php include "parts/meta.php" ?>
		<link rel="stylesheet" href="lib/css/gridsystem.css">
		<link rel="stylesheet" href="lib/css/styleguide.css">
		<link rel="stylesheet" href="css/storetheme.css">
		<script src="https://kit.fontawesome.com/041ded284b.js" crossorigin="anonymous"></script>
		<script src="index.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/products.js"></script></head>
</head>
<body>
  <?php include "parts/navbar.php" ?>
<main>
	<div class="container">
    <nav class="nav-crumbs" style="margin:1em 0">
      <ul>
        <li><a href="collection.php"><i class="fas fa-arrow-left" style="color:black;"></i>Back</a></li>    
      </ul>
    </nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card flat">
				<?php
				echo array_reduce($cartItems,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card flat">
					<?= cartTotals() ?>
					<div class="card-section">
						<a href="checkout.php" class="form-button confirm">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<main>

  <?php include "parts/footer.php" ?>

	
</body>
</html>