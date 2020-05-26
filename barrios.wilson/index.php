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


	<div class="grid nogap">
      <div class="col-xs-12 col-md-6">
        <div class="slider-1">
            <h3 style="color:white">It's not just a keychain...</h3>
            <h4 style="color:white"> It's an statement!</h4>
            <div class="form-control">
            <a class="form-button yellow" href="product_list.php">VISIT OUR STORE</a>
            </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6">
        <div class="slider-2">
          <h3 style="color:white">Never loose<br> your keys<br> again!</h3>
          <div class="form-control">
            <a class="form-button green" href="product_list.php">VISIT US</a>
            </div>
        </div>

        <div class="slider-3">
          <h3 style="color:white">We sell one of a kind keychains</h3>
          <div class="form-control">
            <a class="form-button red" href="product_list.php">VISIT OUR STORE</a>
            </div>
          </div>
      </div>
    </div>






<div class="banner-image3">
<div class= "container">

<h3 style="text-align: center"> New Arrivals </h3>

<div >
    <?php recommendedCategory('places') ?>
    <br>
    <br>
  </div>
</div>

  </div>
</div>


<div class="bar"><h5>COMING SOON!!</h5></div>
<div class="grid nogap">
      <div class="col-xs-12 col-md-4">
        <div class="wp-pic1">
</div> </div>


<div class="col-xs-12 col-md-4">
  <div class="wp-pic2">
  </div></div>

<div class="col-xs-12 col-md-4">
  <div class="wp-pic3">
</div></div>
</div>





<div class="content-slider">
	             <h3 style="color:white">Our Clients Say</h3>
  <div class="slider container">
    <div class="mask">
      <ul>
        <li class="anim1">
          <div class="image-cropper">
          <img src="img/megan.jpg" alt="megan"><br>
        </div>
          <div class="quote">I love these! The quality is great. The key chains are nice and I absolutely love them. I have one on my work bag. </div>
          <div class="source">- Megan A.</div>
        </li>

        <li class="anim2">
          <div class="image-cropper">
          <img src="img/stephanie.jpg" alt="stephanie"><br></div>
          <div class="quote">The quality I paid for is there . I love them ! I won’t ever pay more than how much I did here for them . But Etsy had them for 5 dollars each so I got a steal ! And they match my steering wheel cover perfect ! Delivery was perfect ! .</div>
          <div class="source">- Stephanie L</div>
        </li>

        <li class="anim3">
          <div class="image-cropper">
          <img src="img/rosa.jpg" alt="rosa"><br>
        </div>
          <div class="quote">This is my second order of Keychains! I resale them inside of my salon & everyone loves them! Very pleased with product, delivery and price!</div>
          <div class="source">- Rosa M.</div>
        </li>

        <li class="anim4">
          <div class="image-cropper">
          <img src="img/robert.jpg" alt="robert"><br>
        </div>
          <div class="quote">I have them everywhere! They are so convenient and stylish. Would make great gifts for multiple people on a budget (like co workers). They are lightweight even with the chapstick in it.</div>
          <div class="source">- Robert</div>
        </li>

        <li class="anim5">
          <div class="image-cropper">
          <img src="img/jax.jpg" alt="jax"><br>
        </div>
          <div class="quote">These are awesome, gave one set to my daughters' friend that just turned 16. One I kept for myself and one set aside for my sister's birthday, plus keeping spares to give for unexpected birthdays for my daughters' friends.</div>
          <div class="source">- Jax L.</div>
        </li>
      </ul>
    </div>
  </div>
</div>




<div class="banner-image">
	<div class="container">
	<div class="grid gap">
			<div class="col-xs-12 col-md-7">
        <div style="padding-left: 2em">
	
	<h3 style="color:white"> Subscribe</h3>
	<h4 style="color:white">To our newsletter and receive coupons and news of our specials.</h4>
		
		<div class= "hotdog light2">
			<input type="email" placeholder="Your e-mail address"></div>
			<div class="form-button yellow" href="">Submit</div>
    </div>
    <br>
    <br>
    <br>
    <br>
	
			<div class="col-xs-12 col-md-5"></div></div>

	</div>

</div>
		

	</div>


  <?php include "parts/footer.php" ?>
    </div>



</body>
</html>