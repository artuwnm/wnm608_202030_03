<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$rows = getRows(
    makeConn(),
    "SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 4
	"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Catamaran:300|Oxanium:300, 600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<!-- php -->
	<?php include "parts/navbar.php" ?>
	<div class="view-window" style="background-image: url('img/homepage.jpg');">	
		<div class="overlay">Transform your room <br> into a cozy sanctuary.</div>
		<div class="arrow">
			<span></span>
			
		</div>
	</div>
		<div class="intro">
		<p>Featured Products</p>
		<img src="./img/wavy.png" alt="" style="width: 100%; object-fit: scale-down; padding-top: 0px;">

	</div>

    <div class="container">
        <div class="grid gap" style="clear:both;">

        <?php



        echo array_reduce(
            $rows,
            'productListTemplate'
        );

        ?>
        </div>
    </div>	

			
	</div> 

	<?php include "parts/footer.php" ?>


	