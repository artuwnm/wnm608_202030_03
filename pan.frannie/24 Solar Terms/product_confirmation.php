<?php

session_start();
$_SESSION['cart'] = [];

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirmation-24 SOLAR TERMS</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

		<div class="cardblue">
			<h2 class="bigtitle">Order Confirmation</h2>
			
		</div>


	<div class="container">

			<div class="thanks">
				<p style="text-align:center;">Hi, we’re getting your order ready to be shipped. You will be receiving a confirmation email with order details.</p>
				<p style="text-align:center;font-weight:500;">ORDER NO. 2457767835</p>
			</div>
            
            <hr>

			<div style="margin-top:50px;display:flex;">
				<a class="form-button"  href="product_list.php" style="margin:auto">Continue Shopping</a>
			</div>
		</div>



<?php include "parts/footer.php" ?>

	
</body>
</html>