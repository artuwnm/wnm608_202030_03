<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

<?php include "parts/meta.php" ?>

	<style>
	h2 {
		margin-top:1em;
		border-bottom:1px solid var(--color-neutral-medium);
		margin-bottom:1em;
	}
	</style>

</head>
<body>
	<?php include "parts/navbar.php" ?>


	<div class="container">

			<h2>Product Item</h2>

			The Item is #<?= $_GET['id'] ?>
			</div>
		
	</div>


  <?php include "parts/footer.php" ?>
    </div>



</body>
</html>