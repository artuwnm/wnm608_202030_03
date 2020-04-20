<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
    include('parts/header.php');
?>

<?php
    $rows = getRows(
        makeConn(),
        "SELECT * FROM `products` ORDER BY `date_create` DESC LIMIT 12"
    );

    echo array_reduce(
        $rows,
        "productListTemplate"
    );
?>


<?php include('parts/footer.php') ?>