<?php

include_once "lib/php/functions.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body style="background: #FFF;">
    <style>
        .a_{
            color: #3a56a4;
        }
        .a_:hover{
            text-decoration:none;
            color: #E3B0B2;
            cursor: pointer;
        }
        .d_float{
            float: left;
        }
        .divShade{
            float: left;
            width:250px;
            height:auto;
            background:#fff;
            color:#333;
            filter:progid:DXImageTransform.Microsoft.Shadow(color=#909090,direction=90,strength=4);
            -moz-box-shadow: 2px 2px 5px #909090;
            -webkit-box-shadow: 1px 1px 10px #909090;
            box-shadow:1px 1px 5px #909090;
        }
    </style>

	<?php include "parts/navbar.php" ?>
    <div style="max-width: 750px;margin: 0 auto">
        <img src="img/home.jpg" alt="" style="width: 100%;height:25em" >

        <div style="max-width: 100%;padding-top: 2em;">
            <div class="d_float" style="width: 20%;margin: 0;">
                <a class="a_" href="index.php?category=Flowers"><p style="">Flowers</p></a>
                <a class="a_" href="index.php?category=Plants"><p style="">Plants</p></a>
                <a class="a_" href="index.php?category=Food"><p style="">Food</p></a>
                <a class="a_" href="index.php?category=Landscape"><p style="">Landscape</p></a>
                <a class="a_" href="index.php?category=Season"><p style="">Season</p></a>
            </div>
            <div class="d_float" style="width: 80%;">
                <!--商品頂部bar圖片-->
                <img src="img/dis.png" style="max-width: 100%" alt=""/>
                <!-- 商品展示 -->
                <div style="width: 100%;font-size: 12px;">
                    <!--商品-->
                    <?php
                        indexData()
                    ?>
                </div>


            </div>
        
        </div>
        
            <div style="width: 100%;color:#fff">
    
            <p>© Zoe Zhang</p>
            <p>Terms & Conditions</p>
          

            </div>
           

        
    </div>
    <img src="img/disc.jpg" alt="" style="width: 100%;" >
    <?php include "parts/footer.php" ?>
   





</body>




</html>