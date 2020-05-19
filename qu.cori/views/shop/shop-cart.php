<?php 
	// $router = '../../';
	// $url = '../../data/products.json'; // path to your JSON file
	// $data = file_get_contents($url); // put the contents of the file into a variable
	// $data = json_decode($data); // decode the JSON feed
	// $url2 = '../../data/cart.json'; // path to your JSON file
	// $cart = file_get_contents($url2); // put the contents of the file into a variable
	// $cart = json_decode($cart); // decode the JSON feed
	include_once "form_actions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>coriq_shop</title>
	<link rel="stylesheet" href="../../public/css/gridsystem.css">
	<link rel="stylesheet" href="../../public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">

	<style>
		i.fas,
		i.fab {
		    color: var(--color-neutral-dark);
		}
	</style>
</head>
<body>
	<div class="container">
		<?php include "../parts/menu-shop.php" ?>

		
		
		<div class="img-container grid grid-gap-xs">
			<div class="nav-breadcrumb col-6">
				<a href="../../index.php" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Home</a>
				<span class="nav-breadcrumb-separator"></span>
		        <a href="index.php" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Shop</a>
		        <span class="nav-breadcrumb-separator"></span>
		        <a href="" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0" id="">Cart</a>
     		</div>
     		<div class="col-6 flex-center flex-justify-end" id="shop-cart">
     			<a href="shop-cart.php" class="nav-breadcrumb-link">
     				<span>Cart</span>
     				<img src="../../public/img/icon/cart.png">
     				<span class="badge"><?php echo $cartTotal; ?></span>
     			</a>
     		</div>
				<div class="shop-cart-list col-xxl-8 col-xl-8 col-md-8 col-sm-12 col-12">
					<?php //popup
						
						if (isset($_GET['checkout'])) {
							echo '<div class="checkout-form-section">
									<p>Thank you for purchased.</p>
								</div>';
						}
						if(isset($_GET['add_id'])) {
							$id = $_GET['add_id']+1;
							$sql_current = "SELECT * FROM products WHERE id='$id'";
							$data_current = getRows($conn,$sql_current);
							echo '<div class="checkout-form-section">
									<p>Successfully adding item ' . $data_current[0]->title . ' to your cart.</p>
								</div>';
							
						} else if(isset($_GET['delete_id'])) {
							$id = $_GET['delete_id']+1;
							$sql_current = "SELECT * FROM products WHERE id='$id'";
							$data_current = getRows($conn,$sql_current);
							echo '<div class="checkout-form-section">
									<p>Successfully delete item ' . $data_current[0]->title . ' in your cart.</p>
								</div>';
							
						} else if(isset($_GET['update_id'])) {
							$id = $_GET['update_id']+1;
							$sql_current = "SELECT * FROM products WHERE id='$id'";
							$data_current = getRows($conn,$sql_current);
							echo '<div class="checkout-form-section">
									<p>Successfully update item ' . $data_current[0]->title . ' in your cart.</p>
								</div>';

						}
					?>
					
					<div class="checkout-form-section message">
						
						<?php 
							if(count($cart)==0) {
								echo "<p>There are no items in your cart.</p><p><a href='index.php'><button class='btn'>Continue Shopping</button></a></p>";
							}
						 ?>
						 <ul>
						<?php foreach ($cart as $i=>$currentItem) :  ?>
							<?php 
								$currentSize = $currentItem->size;
								$price = $sizeTemplate->$currentSize->_price; 
								$quantity = $currentItem->quantity;
								$subTotal =$subTotal+$price*$quantity;
								// $orderTax =($subTotal*0.0725);
								$orderTax = number_format($subTotal*0.0725,2,'.','');
								$orderTotal = $subTotal+$orderTax;
								// $orderTax =(double)$orderTax;
								// echo count($cart);
								$id = $currentItem->id+1;
								$sql_current = "SELECT * FROM products WHERE id='$id'";

								$data_current = getRows($conn,$sql_current);
								$data_current = $data_current[0];
								
							 ?>
							 

							<li class="grid grid-gap-xs">

								<div class="list-img col-xxl-3 col-xl-3 col-md-3 col-sm-3 col-3 flex-center">
									<img class="<?php echo $data_current->orientation; ?>" src="../../public/img/<?php echo $data_current->category; ?>/<?php echo $data_current->images; ?>" alt="">
								</div>

								<div class="list-info col-xxl-4 col-xl-4 col-md-4 col-sm-4 col-4 flex">
									<span class="list-info-title"><?php echo $data_current->title; ?></span>
									<span class="list-info-label"><?php 
										$currentSize = $currentItem->size;
										echo $sizeTemplate->$currentSize->_size; 
										?>
									</span>
								</div>

								<div class="list-value flex col-xxl-5 col-xl-5 col-md-5 col-sm-5 col-5">
									<div>
										<span>$<?php 
											echo $sizeTemplate->$currentSize->_price; 
											?>
										</span>
									</div>
									<div>
										<span class="col-4">X <?php echo $currentItem->quantity; ?></span>
										<!-- <input class="col-4" size="4" max="9999" min="1" value="<?php echo $currentItem->quantity; ?>" type="number" step="1"> -->
									</div>				
									<div class="list-edit flex-right">
										<form method="post" action="form_actions.php">
											<input value="<?php echo $currentItem->size; ?>" name='original_size' style="display:none; ">
											
											<button value="<?php echo $currentItem->id; ?>" class="btn" name="edit">EDIT</button>
											<button value="<?php echo $currentItem->id; ?>" class="btn" name="delete">REMOVE</button>
										</form>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
							

						</ul>
					</div>
				</div>
			<?php 
			if(isset($_GET['delete_id'])) {
					$index = $_GET['delete_id'];
			
					

				}
			if(isset($_GET['edit_id'])) {
					$index = $_GET['edit_id']+1;
					$sql_current = "SELECT * FROM products WHERE id='$index'";
					$data_current = getRows($conn,$sql_current);
					$data_current = $data_current[0];
								
		
					showPopup($data_current,$cart,$sizeTemplate);
					
					

				}
				
				function showPopup($data,$cart,$sizeTemplate) {
					// print_r($data->id);
					foreach ($cart as $i=>$currentItem) {
						// print_r($currentItem->id);
						if($data->id-1 == $currentItem->id) {
							// print_r($currentItem);

							$SIZE= $currentItem->size;
							$PRICE = $sizeTemplate->$SIZE->_price;
							$SIZE= $sizeTemplate->$SIZE->_size;
				
						$output = '<option value="xs"'. ($currentItem->size=='xs'?'selected':'').'><span>X-Small 10" X 7" —— $9.99</span></option><option value="s"'. ($currentItem->size=='s'?'selected':'').'><span>Small 19" X 13" —— $19.99</span></option><option value="m"'. ($currentItem->size=='m'?'selected':'').'><span>Medium 23" X 17" —— $29.99</span></option><option value="l"'. ($currentItem->size=='l'?'selected':'').'><span>Large 28" X 10" —— $39.99</span></option><option value="xl"'. ($currentItem->size=='xl'?'selected':'').'><span>X-Large 40" X 28" —— $49.99</span></option>';
						// echo $output;
						// return $output;
					// }
					// print_r($data);
					// $title = $data[$i]->title;
					// $description = $data[$i].description;
					// print_r($data->title);
					// print_r($data->$description);
					echo <<<HTML
					<div id="item-popup" class="item-popup-cover flex-center" style="display: flex;">
			
						<div class="item-popup-box flex-width-60 grid">
							<div id="close-popup" class="col-12 flex-justify-end" >
									<img src="../../public/img/icon/close.png">
							</div>
							
							<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
								<div class="item-img-box">
									<img id="item-img" src="../../public/img/$data->category/$data->images" alt="">
								</div>
							</div>
							<div class="item-info-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
								<div>
									<p>$data->title</p>
									<p>$data->description</p>

									<form method="post" action="shop-cart.php"> 
										<input value="$currentItem->size" name='original_size' style="display:none; ">
								
										<div class="grid grid-gap-xxs">
											<h4 class="item-info-title col-12">SIZE</h4>
											<select name="size" class="item-size-btn col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 flex-center">
												$output
											</select>
										
										</div>
										<div class="item-bag-info grid grid-gap-xxs">
											<label class="item-info-title col-12" for="quantity" class="">QUANTITY</label>
											<input class="col-12" size="4" max="9999" min="1" value="$currentItem->quantity" type="number" step="1" name="quantity">
										</div>
										<div>
											<button value="$data->id" class="btn btn-add-bag-xl" name="edit_cart">Save Changes</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>



HTML;
						}
					}
				}
			?>


			


			<div class="shop-cart-summary col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-12">
				<div class="checkout-form-section">
					<h3>Order Summary</h3>
					<div class="">
						<img src="" alt="">
					</div>
					<div>
						<div class="checkout-total-container">
							<div class="grid">
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Subtotal</span>
									<span class="checkout-value"><?php echo'$' . $subTotal; ?></span>
								</div>
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Tax</span>
									<span class="checkout-value"><?php echo'$' . $orderTax; ?></span>
								</div>
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Shipping</span>
									<span class="checkout-value">--</span>
								</div>
								<div class="col-12 flex-justify-between">
									<span class="checkout-value-label">Order Total</span>
									<span class="checkout-value"><?php echo'$' . $orderTotal; ?></span>
								</div>
							</div>
						</div>
					</div>
					<form method="post" action="checkout.php"> 
						<button type="submit" class="btn btn-add-bag-xl" data-test="button">Checkout</button>
					</form>
				</div>
			</div>

		</div>


		
	</div>



	<script src="../../public/js/util.js"></script>
	<script src="../../public/js/function.js"></script>
	<?php 
		if(isset($_GET['edit_id'])) {
			echo "<script>popup.cartInit();</script>";
		}
	 ?>
	
</body>
</html>