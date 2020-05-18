<?php

include_once "lib/php/functions.php";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?><!DOCTYPE html>
<html>
<head>
	<title>Moment</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>


	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url('img/img.png')">
    	<div class="container">
    		<h1>Instant-Film Postcards</h1>
		<div class="card-matchtext">
			<a href="product_list.php" class="form-button_frame">See All Series</a>
			</div>
		</div>
	</div>

</body>

</html>