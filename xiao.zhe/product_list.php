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
    <title>Shop</title>
    
    <?php include "parts/meta.php" ?>
    <script src="js/list.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/products.js"></script>

<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script> 

</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="container">
        <h4>Product List</h4>
        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" class="search" placeholder="Search Products">
            </form>
        </div>
        <div class="form-control display-flex">
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="" data-value="">All</button>
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
                <?php include "parts/footage.php" ?><br><br>
    </div>
</body>
</html>