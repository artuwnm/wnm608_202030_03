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

		<div class="img-container grid grid-gap-xs">
			<div class="img-cover">
				<div class="left" id="left"></div>
				<div class="middle" id="middle"></div>
				<div class="right" id="right"></div>
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/landscape/landscape1.jpg" alt="">
			</div>

			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/landscape/landscape5.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/landscape/landscape3.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/landscape/landscape7.jpg" alt="">
			</div>
			<!-- <div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/landscape/8.JPG" alt="">
			</div> -->
			
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/landscape/landscape8.jpg" alt="">
			</div>
			
			
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/landscape/landscape2.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img class="horizontal" src="../public/img/landscape/landscape4.jpg" alt="">
			</div>
			<div class="img-box col-xxl-3 col-xl-4 col-md-6 col-sm-12 col-12">
				<img src="../public/img/landscape/landscape6.jpg" alt="">
			</div>
			
			
			
		</div>
		<div id="photo-nav">
			
		</div>	
	</div>




	<script src="../public/js/util.js"></script>
	<script src="../public/js/function.js"></script>
	<script>
		PhotoAlbum.init();
	</script>		
</body>
</html>