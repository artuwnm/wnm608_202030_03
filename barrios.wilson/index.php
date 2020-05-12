<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Cool Keychains</title>
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


	<div class="wrapper">
  <div class="nested-wrapper1">
    <div class="1">
      <h3>PIC 1 <BR>CALL TO ACTION</h3>
    </div>
  </div>
  <div class="nested-wrapper2">
    <div class="2">
      <h3>PIC 2 <BR>CALL TO ACTION</h3>
    </div>
    <div class="3">
      <h3>PIC 3 <BR>CALL TO ACTION</h3>
    </div>
  </div>
</div>
<div>


	
	</div>

<div class="banner-color">

<div class= "container">

<h1> New Arrivals </h1>

<div class="container">
    <?php recommendedCategory('keychain') ?>
  </div>

	</div>
</div>
</div>

	

	

<div class="content-slider">
	<h1 style="color:white">Our Clients Say</h1>
  <div class="slider">
    <div class="mask">
      <ul>
        <li class="anim1">
          <div class="quote">Hello, this is a quote from a person.</div>
          <div class="source">- Person</div>
        </li>
        <li class="anim2">
          <div class="quote">Hello, this is a quote from another person.</div>
          <div class="source">- Another person</div>
        </li>
        <li class="anim3">
          <div class="quote">Hello, this is a quote from an animal.</div>
          <div class="source">- Animal</div>
        </li>
        <li class="anim4">
          <div class="quote">Hello, this is a quote from a plant.</div>
          <div class="source">- Plant</div>
        </li>
        <li class="anim5">
          <div class="quote">How do ya like that.</div>
          <div class="source">- Cassidy</div>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>


<div class="banner-image">
	<div class="container">
	<div class="grid gap">
			<div class="col-xs-12 col-md-6">
	
	<h1 style="color:white"> Subscribe</h1>
	<h4 style="color:white">To our newsletter and receive coupons and news of our specials.</h4>

	<div class="form-control diplay flex">
		
		<div class= "hotdog light2">
			<input type="email" placeholder="Your e-mail address"></div>
			<div class="form-button yellow" href="">Submit</div>
		</div>
	

	<div class="grid gap">
			<div class="col-xs-12 col-md-6"></div></div>

	</div>
	</div>

</div>
		

	</div>


  <?php include "parts/footer.php" ?>
    </div>



</body>
</html>