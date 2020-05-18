<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
    include('parts/header.php');
    echo "<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>";
    echo "<script src='lib/js/functions.js'></script>";
    echo "<script src='js/templates.js'></script>";
    echo "<script src='js/list.js'></script>";

?>

<div class="container">
    <div class="grid gap" style="overflow: hidden; margin-top: 20px;">
        <div class="col-md-2 col-sm-6 col-xs-8" style="margin: auto;">
            <div class="product-sort" style="margin: auto; position: relative;">
                <select class="js-sort">
                    <option value="1" selected="selected">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3">Price: High to Low</option>
                    <option value="4">Price: Low to High</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="display-flex">
                <div class="flex-none">
                    <button type="button" class="js-filter button" data-type="" data-value="">All</button>
                </div>
                <div class="flex-none">
                    <button type="button" class="js-filter button" data-type="category" data-value="French">French Style</button>
                </div>
                <div class="flex-none">
                    <button type="button" class="js-filter button" data-type="category" data-value="Japanese">Japanese Style</button>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-sm-6 col-xs-6" style="margin: auto;">
            <div class="hotdog" style="margin: auto;">
                <form id="product-search">
                    <input type="search" class="search" placeholder="Search Products">
                </form>
            </div>
        </div>
    </div>


    <div class="grid gap productlist" style="overflow: hidden;"> </div>
</div>

<style type="text/css">
    body {
        background-color: #fff;
    }
</style>

<?php include('parts/footer.php') ?>