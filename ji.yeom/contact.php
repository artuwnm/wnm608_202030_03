<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

<!-- 	<div class="view-window contact display-flex flex-line-center" style="background-image:url('img/contact.jpg')">
		<div style="width: 80%; margin: auto;">
			<h1 style="color:#fff">CONTACT</h1>
		</div>
	</div> -->

	<div class="container" style="padding-top: 20px;">
		<div class="card" style="max-width: 800px; margin: auto">
			<h1>Get in Touch</h1>
			<p style="padding-bottom: 10px">Let us know what's your concern. We are here to help you and happy to answer any questions!</p>

				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label class="form-label">First Name</label>
							<input type="text" class="form-input" placeholder="First Name">
						</div>
						<div class="col-xs-12 col-md-6">
								<label class="form-label">Last Name</label>
								<input type="text" class="form-input" placeholder="Last Name">
						</div>
					</div>
					<!-- <label class="form-label">Name</label>
					<input type="text" class="form-input" placeholder="Name"> -->
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label class="form-label">Email</label>
							<input type="text" class="form-input " placeholder="Email">
						</div>
						<div class="col-xs-12 col-md-6">
								<label class="form-label">Phone</label>
							<input type="text" class="form-input" placeholder="Phone">
						</div>
					</div>
				</div>
				<div class="form-control">
					<label class="form-label">Message</label>
					<textarea type="message" class="form-input" rows="5" placeholder="Message"></textarea>
				</div>
<br>
					<button type="submit" class="form-button primary">SUBMIT</button>
		</div>
	</div>


	<?php include "parts/footer.php" ?>

</body>
</html>