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
    <div class="hotdog">
        <form id="product-search">
            <input type="search" class="search" placeholder="Search Products">
        </form>
    </div>

    <div class="form-control display-flex">
        <div class="flex-none">
            <button type="button" class="js-filter button" data-type="" data-value="">All</button>
        </div>
        <div class="flex-none">
            <button type="button" class="js-filter button" data-type="title" data-value="rose">Rose</button>
        </div>
    </div>

    <div class="form-control">
        <div class="form-select">
            <select class="js-sort">
                <option value="1">Price High to Low</option>
                <option value="2">Price Low to High</option>
            </select>
        </div>
    </div>


    <div class="productlist"> </div>
</div>

<?php include('parts/footer.php') ?>