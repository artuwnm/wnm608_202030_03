<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
    include('parts/header.php');

    $data = getRows(
        makeConn(),
        "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'"
    );
    $o = $data[0];
?>

<div class="col-3 col-s-3">
    <div class="product-description">
        <h1><?php echo "$o->title" ?></h1>
        <p><?php echo "&dollar;$o->price" ?></p>
        <img src="img/little.jpg">
        <p><?php echo "$o->description" ?></p>
    </div>
</div>


<?php include('parts/footer.php') ?>