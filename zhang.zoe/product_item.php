<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<?php include "parts/meta.php" ?>


</head>
<body>

	<?php include "parts/navbar.php" ?>
	<div class="container">
		<div class="card">
			<h2>Product Item</h2>

			<div>
				The item is #<?= $_GET['id']  ?>
			</div>
		</div>
	</div>
	
</body>
</html>