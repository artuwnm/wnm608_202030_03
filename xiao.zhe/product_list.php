<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$rows = getRows(
    makeConn(),
    "SELECT *
    FROM `products`
    ORDER BY `date_create` DESC
    LIMIT 12
    "
);

// print_p($rows);

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Store: Product List</title>
    
    <?php include "parts/meta.php" ?>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="container">
        <h2>Product List</h2>
        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" class="search" placeholder="Search Products">
            </form>
        </div>
        <div class="form-control display-flex">
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
            </div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="Workout">Workout</button>
            </div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="Beginner">Beginner</button>
            </div>
        </div>
        <div class="form-control">
            <!-- .form-select>select>option -->
            <div class="form-select">
                <select class="js-sort">
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3">Most Expensive</option>
                    <option value="4">Least Expensive</option>
                </select>
            </div>
        </div>







        <div class="grid gap productlist">

        <?php



        echo array_reduce(
            $rows,
            'productListTemplate'
        );

        ?>


        </div>
    </div>

    <div class="container">
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