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

	<header class="pagename">
		<div class="container display-flex">
			<div class="pagename">Product Confirmation</div>
			</div>
	</header>

	<div class="container">
		<div class="card soft">
			
			<div class="thankyoupic"><img src="img/thankyou.png"></div>

			<div>
				<div class="thankyou">Your order was complited succesfully. </div>
				<p style="text-align: center;">An email receipt including the details about your oder has been sent to the e-mail address provided. Please keep it for your records.</p>
				<br>

				<div class="container">
			


				<a class="form-button green-conf" href="product_list.php">Continue Shopping</a>
			</div>
		</div>
				<br>
				<br>
				<br>
			</div>
		</div>
	</div>
	
</body>
<?php include "parts/footer.php" ?>
</html>