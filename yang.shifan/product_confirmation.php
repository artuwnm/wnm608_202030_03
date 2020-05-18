<?php
    include_once('lib/php/functions.php');
    $_SESSION['cart'] = [];
    include_once('parts/templates.php');
    include('parts/header.php');
?>

<div class="container">
    <div class="card">
        <h2 style="text-align: center;"> Thank you for purchsing. </h2>
        <div style="margin-top: 20px;">
            <a class="button" href="product.php"> Continue Shopping</a>
        </div>
    </div>
</div>

<?php include('parts/footer.php') ?>