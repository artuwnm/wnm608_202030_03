<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$rows = getRows(
    makeConn(),
    "SELECT *
    FROM `products`
    ORDER BY `date_create` DESC
    LIMIT 0,4
    "
);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<?php include "parts/meta.php" ?>

</head>
<body>
	<div style="width: 100%; overflow:hidden;" ><img style="width:100%;height:auto;" class="home_image" src="images/home/title_image.jpg"></div>
	<header  style="position:absolute;right:0;top:0;z-index:2;width:100%;">
			<div class="container ">

			<nav class="nav">
				<div class="nav_left">
					<header class="nav-type" >N°F COACH</header> 
				</div>
				<div class="nav_right">
					<a href="index.php" class="navr">Home</a>
					<a href="about.php" class="navr">About</a>
					<a href="product_list.php" class="navr">Shop</a>
					<a href="cart.php" class="navr">Cart</a>
				</div>

			</nav>

		</div>
	</header>

    <div class="container ">



        <div class="card">
            <h2>About Us Bay Area Atheles</h2>
            <p>	N°F is a platform that can deliveris you such quaility workout plan. If you want results, you need to take action. N°F is the only website that turns your bio-data into a custom workout plan - built for you.</p>
            <div style="text-align:right;padding-right:10px"><a href="about.php">More</a></div>
        </div><br><br><br>



        <div class="grid gap">
            <?php
            echo array_reduce(
                $rows,
                'productListTemplate'
            );
            ?>
        </div>


        <div style="width:100%;margin-top:10%;">
            <div style="float:left;width:25%;">Contact with us</div>
            <div style="float:left;color:#ee8734;font-size:30px;font-weight:bold; width:20%;">N°F</div>
            <div style="float:left;width:25%;">
                <div  style="font-weight:bold">MENU</div>
                <div>
                    <div style="margin-top:20px;"><a href="index.php" style="font-weight:normal;text-decoration:none;">Home</a></div>
                    <div style="margin-top:20px;"><a href="about.php" style="font-weight:normal;text-decoration:none;">About</a></div>
                    <div style="margin-top:20px;"><a href="product_list.php" style="font-weight:normal;text-decoration:none;">Shop</a></div>
                    <div style="margin-top:20px;"><a href="cart.php"  style="font-weight:normal;text-decoration:none;">Cart</a></div>
                </div>
            </div>
            <div >
                <div  style="font-weight:bold">Office</div><br> 
                <div>180 NEW MONTGOMERY<br><br>Academy of Art University<br><br>San Fransisco<br><br>CA</div>
            </div>
        </div>



    </div>
</body>
</html>