<?php

session_start();
$_SESSION['cart'] = [];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Confirmation</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft" align=center>
			<h2>Product Confirmation</h2>

			<div>
				<h3>THANK YOU FOR YOUR ORDER.</h3>
			</div>

			<div>
				<div class="form-button ">
				<a class="btn btn-primary btn-outline" href="product_list.php">Continue Shopping</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container white"></div>

	<?php include "parts/footer.php" ?>

<!-- GOTOTOP -->
	<a class="gototop" href="product_confirmation.php"><i class="fas fa-arrow-up"></i></a>
	

</body>
</html>