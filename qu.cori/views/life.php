<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>608-01</title>
	<link rel="stylesheet" href="../public/css/gridsystem.css">
	<link rel="stylesheet" href="../public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php include "parts/menu.php" ?>

		<div class="img-container grid grid-gap-md">
			<div class="img-cover">
				<div class="left" id="left"></div>
				<div class="middle" id="middle"></div>
				<div class="right" id="right"></div>
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img style="opacity: 0.95;" src="../public/img/life/1.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/life/2.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/life/6.jpg" alt="">
			</div>
			
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/life/4.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/life/5.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/life/3.jpg" alt="">
			</div>
			
		
			
			
		</div>
		<div id="photo-nav">
			<!-- <ul>
				<li></li>
			</ul> -->
		</div>	
	</div>
	<!-- <div class="a">
		<div class="b"></div>
	</div> -->



	<script src="../public/js/util.js"></script>
	<script src="../public/js/function.js"></script>
	<script>
		PhotoAlbum.init();
	</script>		
</body>
</html>