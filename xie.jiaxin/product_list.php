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
<div class="container">
    <div class="form-control">
        <form class="hotdog light" id="product-search">
            <input type="search" class="search" placeholder="Search Products">
        </form>
    </div>
    <h2 style="display:block;clear:both;">
       <!--  <div style="float:left;">Product List</div> -->
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

    <div class="grid gap productlist" style="clear:both;">

        <?php



        echo array_reduce(
            $rows,
            'productListTemplate'
        );

        ?>


    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>