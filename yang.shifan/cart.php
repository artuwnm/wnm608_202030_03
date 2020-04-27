<?php
    include_once('lib/php/functions.php');
    include_once('parts/templates.php');
	include('parts/header.php') 
?>

<div class="container">
	<div class="display-flex">
		<div class="display-block">
			<a class="button back" href="product.php" class="">Back</a>
		</div>
	</div>

	<?php
	    $items = getCartItems();

	    echo array_reduce(
	        $items,
	        "cartListTemplate"
	    );
	?>

		<div class="card-section">
			<?= cartTotals() ?>
			<a class="button right" href="product_checkout.php"> Checkout </a>
		</div>

</div>



<?php include('parts/footer.php') ?>