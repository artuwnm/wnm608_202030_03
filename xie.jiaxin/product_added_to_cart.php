<?php

include_once "lib/php/functions.php";

// print_p($_SESSION);
$p = array_find(
    getCart(),
    function($o) use ($id) { return $o->id==$_GET['id']; }
);
$o = getRows(makeConn(),
    "SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Store: Product Added to Cart</title>

    <?php include "parts/meta.php" ?>
</head>
<body>

<?php include "parts/navbar.php" ?>

<div class="container">
        <!-- <h2>Product Item</h2> -->

        <div style="margin-top: 10%;">
            Thank you for adding <?= $p->amount ?> of the <?= $o->title ?> to the cart.
        </div>

        <nav class="nav-flex">
            <ul>
                <li class="flex-stretch"></li>
                <li class="flex-none">
                    <!-- <div class="large-button"><a href="product_list.php">Continue Shopping</a></div> -->
                    <!-- <a href="product_list.php">Continue Shopping</a> -->
                    <div class="continue-shopping"><a href="product_list.php">Continue Shopping</a></div>
                    <div class="view-cart"><a href="product_cart.php">View Cart</a></div>

                </li>
            </ul>
        </nav>
</div>

</body>
</html>