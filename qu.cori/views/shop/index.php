<?php 
	// $router = '../../';
	// $url = '../../data/products.json'; // path to your JSON file
	// $data = file_get_contents($url); // put the contents of the file into a variable
	// $data = json_decode($data); // decode the JSON feed

	
	include_once "form_actions.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>coriq_shop</title>
	<!-- <link rel="stylesheet" href="../../public/css/fontawesome/css/all.css"> -->
	<link rel="stylesheet" href="../../public/css/gridsystem.css">
	<link rel="stylesheet" href="../../public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
	<!-- <script src="../../public/js/list.js"></script> -->
	<!-- <script src="js/templates.js"></script> -->
	<style>
		i.fas,
		i.fab {
		    color: var(--color-neutral-dark);
		    /*position: fixed;*/
		}
		/* Effect 2: Move Up */
		.animate2 {
			-webkit-transform: translateY(200px);
			transform: translateY(200px);
			-webkit-animation: moveUp 0.65s ease forwards;
			animation: moveUp 0.65s ease forwards;
		}

		@-webkit-keyframes moveUp {
			0% { }
			100% { -webkit-transform: translateY(0); opacity: 1; }
		}

		@keyframes moveUp {
			0% { }
			100% { -webkit-transform: translateY(0); transform: translateY(0); opacity: 1; }
		}
		.animate {
			-webkit-transform: scale(0.6);
			transform: scale(0.6);
			-webkit-animation: scaleUp 0.65s ease-in-out forwards;
			animation: scaleUp 0.65s ease-in-out forwards;
		}

		@-webkit-keyframes scaleUp {
			0% { }
			100% { -webkit-transform: scale(1); opacity: 1; }
		}

		@keyframes scaleUp {
			0% { }
			100% { -webkit-transform: scale(1); transform: scale(1); opacity: 1; }
		}
		
		
	</style>
</head>
<body>
	<div class="container">
		<?php include "../parts/menu-shop.php" ?>

		<div class="img-container grid grid-gap-md" id="product-container">
			<div class="nav-breadcrumb col-6">
				<a href="../../index.php" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Home</a>
				<span class="nav-breadcrumb-separator"></span>
		        <a href="" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Shop</a>
	     	</div>
     		<div class="col-6 flex-center flex-justify-end" id="shop-cart">
     			<a href="shop-cart.php" class="nav-breadcrumb-link">
     				<span>Cart</span>
     				<img src="../../public/img/icon/cart.png">
     				<span class="badge"><?php echo $cartTotal; ?></span>
     			</a>
     		</div>
			

			<form class="col-6" id="">
     			<input class="input-search" id="product-search" type="search" placeholder="Search e.g. portrait" οnkeydοwn="if(event.keyCode==13){console.log('hh'); return false;}">
     			 <input style="display:none;">
     		</form>
     		<form class="col-12 filter">
     			<button type="button" class="btn-add-bag btn-label js-filter" data-type="category" value="">All</button>
     			<button type="button" class="btn-add-bag btn-label js-filter" data-type="category" value="cityscape">Cityscape</button>
     			<button type="button" class="btn-add-bag btn-label js-filter" data-type="category" value="landscape">Landscape</button>
     			<button type="button" class="btn-add-bag btn-label js-filter" data-type="category" value="portrait">Portrait</button>
     			<button type="button" class="btn-add-bag btn-label js-filter" data-type="category" value="life">Life</button>
     		</form>
     		
				
		




     	</div>
		<div class="img-container grid grid-gap-md" id="product-search-result">
			
     		<?php foreach ($data as $i=>$current) : ?>
     			<div class="col-xxl-3 col-xl-3 col-md-4 col-sm-6 col-12 animate">
					<div class="img-box-shop">
						<!-- <img src="../../public/img/portrait/1.JPG" alt=""> -->
						<img value="<?php echo $current->id-1 ?>" class="lozad <?php echo $current->orientation; ?>" data-src="../../public/img/<?php echo $current->category; ?>/<?php echo $current->images; ?>" alt="">
					</div>
					<div class="info-box-shop">
						<div class="pf-intro flex-justify-between flex-center">
		    				<p><?php echo $current->title; ?></p>
		    				<p><?php echo $current->price; ?></p>
		    			</div>

		    			
		    			<!-- <form action="" method="get"> -->
		    			<div class="pf-tag">
		    				<button type="" value="<?php echo $current->id-1 ?>" class="btn-add-bag" name="index">Add to Bag</button>
		    			</div>
		    			 <!-- <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>     -->

					</div>
				</div>
     		<?php endforeach; ?>
     		<div class="col-12 flex-center">
     			<a href="../admin/" style="font-size: 12px; color: #CCC;">Product Admin</a>
     		</div>


     		<?php //add-bag
				if(isset($_GET['index'])) {
					$index = $_GET['index']+1;
					$sql_current = "SELECT * FROM products WHERE id='$index'";
					$data_current = getRows($conn,$sql_current);
					$data_current = $data_current[0];
					// print_r($data[$index]);
					showPopup($data_current);

				}
				if(isset($_POST['edit'])) {
					$index = $_POST['edit_id']+1;
					$sql_current = "SELECT * FROM products WHERE id='$index'";
					$data_current = getRows($conn,$sql_current);
					$data_current = $data_current[0];
					// print_r($data[$index]);
					showPopup($data_current);
					

				}
				function showPopup($data) {
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
										<div class="grid grid-gap-xxs">
											<h4 class="item-info-title col-12">SIZE</h4>
											<select name="size" class="item-size-btn col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 flex-center">
											    <option value="xs">
												    <div class="item-size-btn col-xxl-6 col-xl-6 col-md-12 col-sm-12 col-12 flex-center">
														<span>X-Small 10" X 7" —— $9.99</span>
													</div>
											    </option>
											    <option value="s">
											    	<span>Small 19" X 13" —— $19.99</span>
											    </option>
											    <option value="m">
											    	<span>Medium 23" X 17" —— $29.99</span>
											    </option>
											    <option value="l">
											    	<span>Large 28" X 10" —— $39.99</span>
											    </option>
											    <option value="xl">
											    	<span>X-Large 40" X 28" —— $49.99</span>
											    </option>
											</select>
											
										</div>
										<div class="item-bag-info grid grid-gap-xxs">
											<label class="item-info-title col-12" for="quantity" class="">QUANTITY</label>
											<input class="col-12" size="4" max="9999" min="1" value="1" type="number" step="1" name="quantity">
										</div>
										<div>
											<button value="$data->id" class="btn btn-add-bag-xl" name="add">Add to Bag</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>



HTML;
				}
			?>





		
	</div>
	<div id="item-popup" class="item-popup-cover flex-center">
			
			<div class="item-popup-box flex-width-60 grid">
				<div id="close-popup" class="col-12 flex-justify-end" >
					<img src="../../public/img/icon/close.png">
				</div>
				
				<div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
					<div class="item-img-box">
						<img id="item-img" src="" alt="">
					</div>
				</div>
				<div class="item-info-box col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12">
					<div>
						<p id="item-title">Title</p>
						<p id="item-description">Description</p>

						<form method="post" action="shop-cart.php"> 
										<div class="grid grid-gap-xxs">
											<h4 class="item-info-title col-12">SIZE</h4>
											<select name="size" class="item-size-btn col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 flex-center">
											    <option value="xs">
												    <div class="item-size-btn col-xxl-6 col-xl-6 col-md-12 col-sm-12 col-12 flex-center">
														<span>X-Small 10" X 7" —— $9.99</span>
													</div>
											    </option>
											    <option value="s">
											    	<span>Small 19" X 13" —— $19.99</span>
											    </option>
											    <option value="m">
											    	<span>Medium 23" X 17" —— $29.99</span>
											    </option>
											    <option value="l">
											    	<span>Large 28" X 10" —— $39.99</span>
											    </option>
											    <option value="xl">
											    	<span>X-Large 40" X 28" —— $49.99</span>
											    </option>
											</select>
											
										</div>
										<div class="item-bag-info grid grid-gap-xxs">
											<label class="item-info-title col-12" for="quantity" class="">QUANTITY</label>
											<input class="col-12" size="4" max="9999" min="1" value="1" type="number" step="1" name="quantity">
										</div>
										<div>
											<button id="addToBag" value="" class="btn btn-add-bag-xl" name="add">Add to Bag</button>
										</div>
									</form>
						<!-- <form method="post" action="form_actions.php"> 
				
							<div class="grid grid-gap-xxs">
								<h4 class="item-info-title col-12">SIZE</h4>
								<div class="item-size-btn col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12 flex-center">
									<span>X-Small 8" X 9"</span><span>$19.99</span>
								</div>
								<div class="item-size-btn col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12 flex-center">
									<span>X-Small 8" X 9"</span><span>$19.99</span>
								</div>
								<div class="item-size-btn col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12 flex-center">
									<span>X-Small 8" X 9"</span><span>$19.99</span>
								</div>
								<div class="item-size-btn col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12 flex-center">
									<span>X-Small 8" X 9"</span><span>$19.99</span>
								</div>
								<div class="item-size-btn col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-12 flex-center">
									<span>X-Small 8" X 9"</span><span>$19.99</span>
								</div>
							</div>
							<div class="item-bag-info grid grid-gap-xxs">
								<label class="item-info-title col-12" for="quantity" class="">QUANTITY</label>
								<input class="col-12" size="4" max="9999" min="1" value="1" type="number" step="1">
							</div>
							<div>
								<button class="btn btn-add-bag-xl">Add to Bag</button>
							</div>
						</form> -->

					</div>
				</div>
			</div>
		</div>

	
	<script src="../../public/js/util.js"></script>
	<script src="../../public/js/function.js"></script>
	<script>
		const observer = lozad(); // lazy loads elements with default selector as '.lozad'
		observer.observe();
		popup.init();
		searchProducts.init();
	</script>	
</body>
</html>