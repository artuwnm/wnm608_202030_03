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

<!-- <div class="col-3 col-s-3">
    <div class="product-description">
        <h1><?php echo "$o->title" ?></h1>
        <p><?php echo "&dollar;$o->price" ?></p>
        <img src="img/little.jpg">
        <p><?php echo "$o->description" ?></p>
    </div>
</div> -->

<div class="container">
    <div class="display-flex">
        <div class="display-block">
            <a class="button back" href="product.php" class="">Back</a>
        </div>
    </div>

        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card flat">
                    <div class="product-main">
                        <img src="img/little.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <form class="card flat" method="get" action="data/form_actions.php">
                    <div class="card-section">
                        <h2><?= $o->title ?></h2>
                        <div class="product-description">
                            <?= $o->description ?>
                        </div>
                        <div class="product-price">&dollar;<?=$o->price?></div>
                    </div>
                    <div class="card-section">
                        <label class="form-label">Amount</label>
                        <select name="amount" class="form-input">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div class="card-section">
                        <input type="hidden" name="action" value="add-to-cart">
                        <input type="hidden" name="id" value="<?= $o->id ?>">
                        <input type="submit" class="button right" value="Add To Cart">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('parts/footer.php') ?>