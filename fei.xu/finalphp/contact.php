<?php

include_once "../lib/php/functions1.php";
include_once "finalparts/templates.php";




// print_p($rows);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<?php include "finalparts/meta.php"?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include "finalparts/navbar.php" ?>

	<div class="container10">
  <form action="contact_confirmation.php">
	<h5>Contact us through the below form, we'll quickly respond. </h5>
    <label for="fname" class="label1">First name:</label>
    <input type="text" id="fname" name="firstname" >
	
	<label for="fname" class="label1">Last name:</label>
    <input type="text" id="fname" name="lastname" >

    <label for="email" class="label1">Email:</label>
    <input type="text" id="email" name="Email" >

     <label for="pnumber" class="label1">Phone number:</label>
    <input type="text" id="pnumber" name="phonenumber">

    <label for="subject" class="label1">Comment:</label>
    <textarea id="subject" name="subject" placeholder="" style="height:100px"></textarea>

    <input type="submit" value="Send" class="btn5">

  </form>
</div>

	<div class="footer">
		<div class="footer-content">

			<div class="footer-section about">
				<h1>Caliwater</h1>
				<p>CALIWATER is a store selling water with different fruit flavors. Instead of boring old water, “Caliwater” makes water delicious without sugar or sweeteners. </p>
			</div>

			<div class="footer-section about2">
				<h1>Follow us</h1>
				<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
			</div>

	
	
	
		</div>
		<div class="footer-bottom">
			&copy; Designed by Fei
		</div>
	</div>
</body>
</html>