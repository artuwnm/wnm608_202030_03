<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
    include('parts/header.php');

    $p = array_find(getCartItems(), function($o) { return $o->id == $_GET['id']; });
    $o = getRows(makeConn(), "SELECT * FROM `products` WHERE `id`={$_GET['id']}")[0];
?>

<div class="container">
    <div class="card soft">
        <h2> Product Item</h2>
        <div>
            Thank you for adding <?= $p->amount ?> of the <?= $o->title ?> to the cart.
        </div>

        <div>
            <a class="form-button" href="product.php"> Continue Shopping</a>
        </div>
    
</div>

<?php include('parts/footer.php') ?>