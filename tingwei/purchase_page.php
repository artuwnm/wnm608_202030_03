<!DOCTYPE html>
<html lang="en">
<head>
	<title>Purchase Page</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>
<!-- CARD DETAILS -->
    <div class="card">
			<h6>CARD DETAILS</h6>
			<div class="form-control">
				<label class="form-label" for="input-example1">Enter your email to checkout</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>
		</div>
    <!-- ADDRESS -->
    <div class="card">
			<h6>ADDRESS</h6>
			<div class="form-control">
				<label class="form-label" for="input-example1">Enter your email to checkout</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>
			<div class="form-control">
				<label class="form-label" for="input-example1">Enter your email to checkout</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>
		</div>

		<div class="form-control">
				<a href="confirmation.php" class="form-button">PLACE ORDER</a>
			</div>
<!-- footer -->
		<div>
        <?php include "../parts/footer.php" ?>
        </div>
</body>
</html>