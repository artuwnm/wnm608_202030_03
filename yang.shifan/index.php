<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
    include('parts/header.php');
?>
<div class="home">
	<div class="slideshow-container">
		<h1 style="text-align: center;">A HEAVEN IN A FLOWER</h1>
	    <div class="imageSlides fade">
	    	<img src="img/slide1.jpg">
	    </div>
	    <div class="imageSlides fade">
	    	<img src="img/slide2.jpg">
	    </div>
	    <div class="imageSlides fade">
	    	<img src="img/slide3.jpg">
	    </div>
	</div>

	<div class="container" style="margin-top: 80px;">
		<h1 style="text-align: center;">About Us</h1>
		<h3 style="text-align: center; width: 80%; margin: auto;">
		Founded in San Francisco, Fancy Flora is a well-known boutique flower shop in the area. Adhering to the design philosophy of innovation and elegance, the flowers are designed by Rachel, a famous floral designer. Fancy Flora's fresh and elegant concept is suitable for daily quality life.
		</h3>
	</div>

	<div class="container" style="display: flex; flex-direction: row; margin-top: 100px;">
		<img style="margin-left: 12%; margin-right: 2%; width: 50%; max-width: 400px;" src="img/summer.jpg">
		<div style="margin: auto;">
			<h2> Flowers shouldn't just be in the ground </h2>
			<h2> they should be in front of everyone </h2>
		</div>
	</div>

	<div class="container" style="display: flex; flex-direction: row; margin-top: 100px;">
		<div style="margin: auto;">
		<h2>Try to put a bottle of flowers </h2>
		<h2>in your life just to please yourself, </h2>
		<h2>brighten up your life and heal everything</h2>
		</div>
		<div style="margin-right: 12%; margin-left: 2%; width: 50%; max-width: 400px;">
			<img src="img/sunshine2.jpg">
		</div>
	</div>

</div>

<style type="text/css">
	body {
		background-color: #fff;
	}

	div.slideshow-container h1 {
		margin: 0;
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-right: -50%;
	    transform: translate(-50%, -50%);
	    z-index: 1;
	    opacity: 0.6;
	}

	.home .container {
		max-width:100%;
		margin-right: auto;
		margin-left: auto;
	}

	@media screen and (max-width: 700px) {
		.home .container {
			max-width:80%;
			margin-right: auto;
			margin-left: auto;
		}
	}
</style>

<script>
var slideIndex = 0;

function showSlide() {
	var slides = Array.from(document.getElementsByClassName("imageSlides"));
	slides.forEach(slide => slide.style.display = "none");
	slideIndex %= slides.length
	slides[slideIndex].style.display = "block";
}

function showNextSlide() {
	showSlide(slideIndex++);
	setTimeout(function() { showNextSlide() }, 4000);
}

showNextSlide();

</script>

<?php include('parts/footer.php') ?>
