<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<?php include "parts/meta.php" ?>

</head>

<div style="width: 100%; height:500px; overflow:hidden;" ><img class="home_image" src="images/home/title_image.jpg"></div>
	<header>
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



<body>
    <div style="width:90%;background:#fff;overflow:hidden;padding-left:5%;padding-right:5%;">



        <div style="width:100%;margin:0 auto;background:150px;background:#eee;padding-top:10px;padding-bottom:10px;margin-top:5%;margin-bottom:5%;">
            <div style="font-weight:bold;padding-left:10px;padding-bottom:10px;">About Us Bay Area Atheles</div>
            <div style="font-size:12px;text-indent:24px;padding-left:10px;padding-bottom:10px;">Unde, iste neque laborum, aperiam quod dignissimos voluptatum facere! Voluptatibus, distinctio, in. Vitae qui, reprehenderit facere rerum ad dolorem doloremque!</div>
            <div style="text-align:right;padding-right:10px">N°F COACH</div>
        </div>



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
            <div style="float:left;color:#ee8734;font-size:30px;width:20%;">N°F</div>
            <div style="float:left;width:25%;">
                <div  style="font-weight:bold">MENU</div>
                <div>
                    <div style="margin-top:20px;"><a href="index.php" style="font-weight:normal;text-decoration:none;">Home</a></div>
                    <div style="margin-top:20px;"><a href="about.php" style="font-weight:normal;text-decoration:none;">About</a></div>
                    <div style="margin-top:20px;"><a href="product_list.php" style="font-weight:normal;text-decoration:none;">Shop</a></div>
                    <div style="margin-top:20px;"><a href="cart.php"  style="font-weight:normal;text-decoration:none;">Cart</a></div>
                </div>
            </div>
            <div style="float:right;width:30%;">
                <div>Contact</div>
                <div>reprehenderit facere rerum ad dolorem doloremque!</div>
            </div>
        </div>



    </div>
</body>
</html>