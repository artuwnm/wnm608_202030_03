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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/list.js"></script>

</head>
<body>

<?php include "parts/navbar.php" ?>
<!-- <div class="form-control display-flex">
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="">All</button>
            </div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="fruit">Asian Countries</button>
            </div>
            <div class="flex-none">
                <button type="button" class="form-button js-filter" data-type="category" data-value="vegetable">Others</button>
            </div>
        </div>
        <div class="form-control">
            <div class="form-select">
                <select class="js-sort">
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                </select>
            </div>
        </div>
 <div class="grid gap productlist"></div> -->
<div class="container">
    <div class="form-control">
        <form class="hotdog light" id="product-search">
            <input type="search" class="search" placeholder="Search Products">
        </form>
    </div>
    <h2 style="display:block;clear:both;overflow:hidden;">
        <div style="float:left;">Product List</div>
        <div  style="float:right;font-size:14px;">
            Sort By
        <select class="js-sort">
            <option value="1">Newest</option>
            <option value="2">Oldest</option>
            <option value="3">Most Expensive</option>
            <option value="4">Least Expensive</option>
        </select>
        </div>
    </h2>

    <div class="grid gap productlist">

        <?php



        echo array_reduce(
            $rows,
            'productListTemplate'
        );

        ?>


    </div>
</div>

</body>
</html>