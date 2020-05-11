<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cartItems = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<?php include "parts/about.php" ?>

	<?php include "parts/footer.php" ?>

<!-- GOTOTOP -->
	<a class="gototop" href="product_about.php"><i class="fas fa-arrow-up"></i></a>


</body>
</html>