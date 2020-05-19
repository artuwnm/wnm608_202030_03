<?php
	include_once "../shop/form_actions.php";

	// $router = '../../';
	// $url = '../../data/products.json'; // path to your JSON file
	// $data = file_get_contents($url); // put the contents of the file into a variable
	// $data = json_decode($data); // decode the JSON feed

	$empty_product = (object) [
		"title"=>"Sunset in Sydney",
		"price"=>"9.99",
		"category"=>"cityscape",
		"description"=>"Sunset view on rooftop in Sydney.",
		"thumbnail"=>"cityscape0.jpg",
		"images"=>"cityscape0.jpg",
		"orientation"=>"horizontal"
	];
	//templates
	function makeListItemTemplate($r,$o) {
		return $r.<<<HTML


HTML;
	}
	if(isset($_GET['action'])) {
		switch($_GET['action']) {
			case "update":
				$users[$_GET['id']]->name = $_POST['user-name'];
				$users[$_GET['id']]->type = $_POST['user-type'];
				$users[$_GET['id']]->email = $_POST['user-email'];
				$users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

				file_put_contents($filename,json_encode($users));

				header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
				break;
			case "create":
				$empty_user->name = $_POST['user-name'];
				$empty_user->type = $_POST['user-type'];
				$empty_user->email = $_POST['user-email'];
				$empty_user->classes = explode(", ",$_POST['user-classes']);

				$id = count($users);

				$users[] = $empty_user;
				// array_push($users,$empty_user);

				file_put_contents($filename,json_encode($users));

				header("location:{$_SERVER['PHP_SELF']}?id=$id");
				break;
			case "delete":
				array_splice($users,$_GET['id'],1);

				file_put_contents($filename,json_encode($users));

				header("location:{$_SERVER['PHP_SELF']}");
		}
	}

	// $statement->execute([
	// 	$_POST["title"],
	// 	$_POST["price"],
	// 	$_POST["category"],
	// 	$_POST["description"],
	// 	$_POST["date_modify"],
	// 	$_POST["thumbnail"],
	// 	$_POST["images"],
	// 	$_POST["orientation"]
	// ]);

	// if(isset($_GET['id'])) {
	// 	if($_GET['id']=="new") {
	// 		makeProductForm($empty_item);
	// 	} else {
	// 		$rows = $getRows($conn,"SELECT * FROM products ORDER BY id");
	// 	}

	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>admin-user</title>
	<?php include "../parts/meta.php" ?>
	<script src="<?php echo $router; ?>public/js/util.js"></script>
	<style>
		#ajaxButton {
			text-align: center;
			line-height: 100%;
		}
		.btn.cancel {
			padding: 0;
			height: 32px;
			text-align: center;
    		line-height: 100%;
		}
		.edit-form-section {
			padding-right: 2rem;
		}
		.edit-form-section>label {
			color: #aaa;
			display: block;
			font-size: 14px;
			margin-top: 15px;

		}
		.edit-form-section>input {
			
		}
		.edit-form-section>* {
			width: 100%;
			margin-top: 10px;

		}
	</style>
	
</head>
<body>
	
	<div class="container">
		<div class="menu">
			<a href="<?php echo $router; ?>index.php">
				<span class="menu-title">coriq_</span>
			</a>
			<!-- <div class="burger" id="menu_open" style="display: block;">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
			<div class="burger" id="menu_close" style="display: none;">
				<div class="line"></div>
				<div class="line"></div>
			</div> -->
	        <div class="menu-inner">
	            <!-- <nav>
	                <ul>
	                	<li><a href="<?php echo $router; ?>user.php">Users</a></li>
	                	<li><a href="<?php echo $router; ?>product.php">Products</a></li>
	                </ul>
	            </nav> -->
	        </div>
	    </div>


		<div class="img-container">
			<div class="grid">
				<div class="nav-breadcrumb col-6">
					<a href="../../index.php" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Home</a>
					<span class="nav-breadcrumb-separator"></span>
			        <a href="../shop/index.php" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Shop</a>
			        <span class="nav-breadcrumb-separator"></span>
			        <a href="" class="nav-breadcrumb-link" data-ajax-loader="ajax-loader-binded" tabindex="0">Admin</a>
		     	</div>
	     		<div class="col-md-4 col-sm-6 col-6  flex-center flex-justify-end">
	     			<form method="post" action="../shop/form_actions.php"> 
						<button value="" class="btn white-btn" name="add_admin">Add new product</button>
					</form>
	     		</div>
			</div>
			
     		<div class="grid">
				<div class="shop-cart-list col-xxl-10 col-xl-10 col-md-10 col-sm-12 col-12">
					
					<div class="checkout-form-section message">
						
						 <ul>
						<?php foreach ($data as $i=>$currentItem) :  ?>

							<li class="grid grid-gap-xs">

								<div class="list-img col-xxl-2 col-xl-2 col-md-2 col-sm-2 col-2 flex-center">
									<img class="<?php echo $currentItem->orientation; ?>" src="../../public/img/<?php echo $currentItem->category; ?>/<?php echo $currentItem->images; ?>" alt="">
								</div>

								<div class="list-info col-xxl-6 col-xl-6 col-md-6 col-sm-6 col-6 flex" style="text-align: left;">
									<span class="list-info-title"><?php echo $currentItem->title; ?></span>
									<span class="list-info-label"><?php echo $currentItem->category; ?></span>
								</div>

								<div class="list-value flex col-xxl-4 col-xl-4 col-md-4 col-sm-4 col-4">
												
									<div class="list-edit flex flex-center">
										<form method="post" action="../shop/form_actions.php"> 
											<button value="<?php echo $currentItem->id; ?>" class="btn" name="edit_admin">EDIT</button>
											<button value="<?php echo $currentItem->id; ?>" class="btn" name="view_admin">VIEW</button>
										</form>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
							

						</ul>
					</div>
				</div>
			</div>
		</div>
		
     		<?php
     			// $addProduct = 'Save Change';
     			if(isset($_GET['add_product'])) {
					showPopup2($empty_product);

					// $addProduct = 'Add Product';

				} 
				if(isset($_GET['edit_id'])) {
					$index = $_GET['edit_id']-1;
					$index2 = $_GET['edit_id'];
					$mydata = [];
					$mydata  = getRows($conn,"SELECT * FROM `products` WHERE id={$index2}");
					// print_r($mydata);
					// showPopup($data[$index]);
					showPopup($mydata[0]);
					

				}

		
				function showPopup($data) {
		
					echo <<<HTML
					<div id="item-popup" class="item-popup-cover flex-center" style="display: flex;">
			
						<div class="item-popup-box flex-width-60 grid">
							<div id="close-popup" class="col-12 flex-justify-end" >
									<img src="../../public/img/icon/close.png">
							</div>
							
							<div class="col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-12">
								<div class="item-img-box">
									<img id="item-img" src="../../public/img/$data->category/$data->images" alt="">
								</div>
								
								<div class="item-img-box">
									<p>$data->title</p>
									<p style="text-transform: uppercase;">$data->category</p>
									<form method="post" action="../shop/form_actions.php">
										<button value="$data->id" class="btn white-btn" name="delete_product" style="width: 100%" type="button" onclick="alert('Ask Cori for permit to delete the product.');">Delete Product</button>
									</form>
								</div>
							</div>
							<div class="item-info-box col-xxl-8 col-xl-8 col-md-8 col-sm-12 col-12">
							<form method="post" action="../shop/form_actions.php">
								<div class="edit-form-section">

								

								    <label for="title">Title</label>
								    <input type="text" name="title" id="title" value="$data->title" placeholder="Title" required>

								    <label for="title">Description</label>
								    <input type="text" name="description" id="description" value="$data->description" placeholder="Description" required>

								    <label for="title">Category</label>
								    <input type="text" name="category" id="category" value="$data->category" placeholder="Category" required>

								    <label for="title">Price</label>
								    <input type="text" name="price" id="price" value="$data->price" placeholder="Price" required>

								    <label for="title">Orientation</label>
								    <select name="orientation">
								    	<option selected>$data->orientation</option>
								    	<option>horizontal</option>
								    	<option>vertical</option>
								    </select>

								    <label for="title">Thumbnail</label>
								    <input type="text" name="thumbnail" id="thumbnail" value="$data->thumbnail" placeholder="Thumbnail" required>

								    <label for="title">Images</label>
								    <input type="text" name="images" id="images" value="$data->images" placeholder="Images" required>
									
									<div>
										<button value="$data->id" class="btn btn-add-bag-xl" name="edit_product">Save Change</button>
										
									</div>
									

								</div>
							</form>
							</div>
						</div>
					</div>
HTML;
				}
				function showPopup2($data) {

					echo <<<HTML
					<div id="item-popup" class="item-popup-cover flex-center" style="display: flex;">
			
						<div class="item-popup-box flex-width-60 grid">
							<div id="close-popup" class="col-12 flex-justify-end" >
									<img src="../../public/img/icon/close.png">
							</div>
							
							<div class="col-xxl-2 col-xl-2 col-md-2 col-sm-12 col-12">
							</div>
							<div class="item-info-box col-xxl-8 col-xl-8 col-md-8 col-sm-12 col-12">
							<form method="post" action="../shop/form_actions.php">
								<div class="edit-form-section">

								

								    <label for="title">Title</label>
								    <input type="text" name="title" id="title" value="$data->title" placeholder="Title" required>

								    <label for="title">Description</label>
								    <input type="text" name="description" id="description" value="$data->description" placeholder="Description" required>

								    <label for="title">Category</label>
								    <input type="text" name="category" id="category" value="$data->category" placeholder="Category" required>

								    <label for="title">Price</label>
								    <input type="text" name="price" id="price" value="$data->price" placeholder="Price" required>

								    <label for="title">Orientation</label>
								    <select name="orientation">
								    	<option selected>$data->orientation</option>
								    	<option>horizontal</option>
								    	<option>vertical</option>
								    </select>

								    <label for="title">Thumbnail</label>
								    <input type="text" name="thumbnail" id="thumbnail" value="$data->thumbnail" placeholder="Thumbnail" required>

								    <label for="title">Images</label>
								    <input type="text" name="images" id="images" value="$data->images" placeholder="Images" required>
									
									<div>
										<button value="" class="btn btn-add-bag-xl" name="add_product">Add Product</button>
									</div>
									

								</div>
							</form>
							</div>
							<div class="col-xxl-2 col-xl-2 col-md-2 col-sm-12 col-12">
							</div>
						</div>
					</div>
HTML;
				}
			?>
		

		<!-- <div id="list-popup" class="item-popup-cover flex-center">
			
			<div class="item-popup-box flex">				
			
				<div class="item-info-box" style="margin:auto;">
					<table width="100%" class="userList" style="min-width: 380px;">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validate()">
					        <tr>
					            <td>User</td>
					            <td>
					            	<input id="user" type="text" name="user">
					            </td>
					        </tr>
					        <tr>
					            <td>Email</td>
					            <td>
					            	<input id="email" type="text" name="email">
					            </td>
					        </tr>
					        <tr>
					            <td class="textright"><button type="button" class="btn cancel">Cancel</button></td> 
					            <td><button type="submit" class="btn submit" id="ajaxButton" name="submit">Submit</button></td>
					        </tr>
						</form>
					</table>
					
					
					
				</div>
			</div>
		</div> -->
		
	</div>


	<script src="../../public/js/util.js"></script>
	<script src="../../public/js/function.js"></script>

	<?php 
		if(isset($_GET['edit_id'])||isset($_GET['add_product'])) {
			echo "<script>popup.cartInit();</script>";
		}
	 ?>
</body>
</html>