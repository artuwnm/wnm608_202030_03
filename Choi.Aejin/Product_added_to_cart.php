
<?php


include_once "lib/php/functions.php";


// print_p($_SESSION);
 


$p = array_find(getCartItems(), function($o) { return $o->id == $_GET['id']; });
    $o = getRows(makeConn(), "SELECT * FROM `products` WHERE `id`={$_GET['id']}")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Added to Cart</title>
	
	<?php include "Parts/meta.php" ?>
</head>
<body>

	<?php include "Parts/navbar.php" ?>

	<div class="container">
		
			<h2>Product Item</h2>   

			<div class=item>

             
          <img src="img/<?= $o->thumbnail ?>" alt="">
       

				<p>Thank you for adding total <?= $p->amount ?> of the <?= $o->name ?> to the cart.</p>
			</div>

			<br>
			<br>
			<br>

			<nav class="nav-flex">
           
           <ul>

           <li class="flex-none">

                <a href="Product_list.php" class="button primary">Continue Shopping</a>

			</li>


          <li class="flex-stretch"></li>
					<li class="flex-none">
						<a href="Product_cart.php" class="button primary">Go to Checkout</a>
					</li>
				</ul>
			</nav>
		
	</div>






	
</body>
</html>