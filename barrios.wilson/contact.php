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

<div class="banner-image5">
	<div class="container">
		<div class="grid nogap">
			<div class="col-xs-12 col-md-6">
				<div class="bigpic"><img src="img/keychain-always.png"></div>
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
						<a class="form-button yellow" href="thankyou_message.php">Submit</a><br><br><br><br>
						</div>
					</div>
					
				</form>
		</div>
	</div>

<div class="grid gap">

      			<div class="col-xs-12 col-md-4">
      				<div class="card-team">
        				<div class="contacticons"><img src="img/location.png" alt="location"></div>
						<div class="team-member">Our Mailing Address</div>
						<div class="title">3561 Homestead Rd. #643<br> Santa Clara, CA 95051</div>
						</div>
					</div>



      			<div class="col-xs-12 col-md-4">
      				<div class="card-team">
        				<div class="contacticons"><img src="img/phone.png" alt="location"></div>
						<div class="team-member">Our Phone</div>
						<div class="title">(408) 667-0991</div>
						</div>
					</div>





				<div class="col-xs-12 col-md-4">
      				<div class="card-team">
        				<div class="contacticons"><img src="img/email.png" alt="location"></div>
						<div class="team-member">Our e-mail</div>
						<div class="title">info@coolkeychains.com</div>
						</div>
					</div>
			</div>
</div>

<div class="grid nogap">


	<p style="text-align: center;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.1615337381572!2d-121.99721748469486!3d37.338684279841246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5884f67ad9d%3A0x658969d7efc0e6f8!2s3561%20Homestead%20Rd%20%23643%2C%20Santa%20Clara%2C%20CA%2095051!5e0!3m2!1sen!2sus!4v1589909099796!5m2!1sen!2sus" width="2800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>

</div>

<?php include "parts/footer.php" ?>

</body>
</html>