<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>coriq_</title>
	<link rel="stylesheet" href="public/css/gridsystem.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
	<style>
		.my-home-title {
			/*display: flex;*/

			z-index: 3;
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,0.5);
		    
		}
		.my-home-title>p {
			font-size: 5rem;
			line-height: 1.5;
			/*font-weight: bold;*/
		    text-transform: uppercase;
		    /*-webkit-writing-mode: vertical-lr;
		    writing-mode: vertical-lr;*/
		    text-align: center;
		    display: flex;
		    -webkit-text-stroke: 2px #eee;
		    text-stroke: 2px #ccc;
		    -webkit-text-fill-color: transparent;
		    text-fill-color: transparent;
		    color: transparent;

		}
		.my-home-title>a>button {
			/*display: inline-block;
			border-radius: 20px;*/
			border: 2px solid #fff;
			background-color: #000;
			height: 40px;
			
			width: 200px;
			
			text-align: center;
			font-size: 16px;
			font-weight: normal;
			line-height: 40px;
			vertical-align: center;
			line-height: 1.5;
			color: #fff;
		}
		.my-home-title>a>button:hover {
			border: 2px solid #fff;
			/*background-color: rgba(0,0,0,0.5);*/
			color: #000;
		}
		.img-box img:hover{
			opacity: 1;
		}
		@media screen and (max-width: 1024px)
		{
			.my-home-title>p {
	        	font-size: 3rem;
		    }
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="menu">
			<a href="index.php">
				<span class="menu-title">coriq_</span>
			</a>
			<div class="burger" id="menu_open" style="display: block;">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<div class="burger" id="menu_close" style="display: none;">
				<div class="line"></div>
				<div class="line"></div>
			</div>
	        <div class="menu-inner">
	            <!-- <span class="menu-title">coriq_</span> -->
	            <nav>
	                <ul>
	                	<li><a href="views/cityscape.php">CITYSCAPE</a></li>
	                	<li><a href="views/landscape.php">LANDSCAPE</a></li>
	                	<li><a href="views/portrait.php">PORTRAIT</a></li>
	                	<li><a href="views/life.php">LIFE</a></li>
	                </ul>
	            </nav>
	            <nav>
	            	<ul>
	            		<li><a href="views/shop/index.php">SHOP</a></li>
	                	<li><a href="views/about.php">ABOUT</a></li>
	                </ul>
	                <ul class="icon">
	                	<li class="flex-center"><a class="flex-width-80" href="https://www.instagram.com/coriq_/"><img src="public/img/icon/instagram.svg" alt=""></a></li>
	                	<li class="flex-center"><a class="flex-width-80" href="mailto: CQU4@art.edu"><img src="public/img/icon/envelope-regular.svg" alt=""></a></li>
	                </ul>
	            </nav>
	        </div>
	    </div>
		<!-- <p class="img-title">cityscape</p> -->
		<div class="img-container grid home-screen-img grid-gap-xs">
			
			<div class="img-box col-3">
				<img src="public/img/cityscape/cityscape2.jpg" alt="">
			</div>
			<div class="img-box col-3">
				<img src="public/img/landscape/landscape5.jpg" alt="">
			</div>
			<div class="img-box col-3">
				<img src="public/img/portrait/6.jpg" alt="">
			</div>
			
			<div class="img-box col-3">
				<img src="public/img/life/5.jpg" alt="">
			</div>
			<div class="my-home-title flex flex-center">
				<p class="img-title">All prints are available.</p>
				<!-- <span>SHOP NOW</span> -->
				<a href="views/shop/index.php"><button class="btn-add-bag btn-label js-filter" data-type="category" value="landscape">SHOP NOW</button></a>

			</div>
		</div>
	<!-- 	<div class="img-container grid home-page">
			<div class="img-box col-12">
				<img src="public/img/portrait/1.jpg" alt="">
			</div>
		</div>
		<div class="img-container grid grid-gap-md home-page">
			<div class="img-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<img src="public/img/portrait/2.jpg" alt="">
			</div>
			<div class="img-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<img src="public/img/portrait/4.jpg" alt="">
			</div>
			<div class="img-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<img src="public/img/portrait/5.jpg" alt="">
			</div>
			<div class="img-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<img src="public/img/portrait/6.jpg" alt="">
			</div>
			<div class="img-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<img src="public/img/portrait/7.jpg" alt="">
			</div>
			<div class="img-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
				<img src="public/img/portrait/8.jpg" alt="">
			</div>
			
			
		</div> -->
		
	</div>
	



	<script src="public/js/util.js"></script>
	<script src="public/js/function.js"></script>
	<script>
		// PhotoAlbum.init();
	</script>		
</body>
</html>