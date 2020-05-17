<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>

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

	<header class="pagename">
		<div class="container pagename display-flex">Contact us</div>
		<div class="nav-crumbs"></div>
	</header>

<div class="banner-color">
	<div class="container">

		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
		
		<div class="picxl"><img src="img/contactback.jpg"></div>
</div>

		<div class="col-xs-12 col-md-6 card soft1">
				
					<h1> Drop us a line</h1>
					<form class="form">
						<p>Please fill the form below and we will get back to you<br> as soon as possible.</p>
						<div class="form-control">
							<label for="checkout-card-name" class="form-label">Name </label>
							<input type="text" class="form-input" name="name">
						</div>
						<div class="form-control">
							<label for="checkout-card-number" class="form-label">E-mail adrress</label>
							<input type="text" class="form-input" name="email">
						</div>
						<div class="form-control">
							<label for="checkout-card-expirationmonth" class="form-label">Subject</label>
							<input type="text" class="form-input" name="subject">
						</div>
						<div class="form-control">
							<label for="message"  class="form-label">Message</label>
							<input type="text area" class="form-input" name="message" style="height: 150px;"><br><br>

						<div class="form-control">
							<a class="form-button yellow" href="thankyou_message.php">Submit</a>
						</div>
					
					</form>
				</div>
			</div>
		

  <?php include "parts/footer.php" ?>
    </div>



</body>
</html>