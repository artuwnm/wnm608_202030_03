
<?php

include_once "lib/php/functions.php";
include_once "Parts/templates.php";

$data = getRows(
	makeConn(),
	"SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'"
);
$o = $data[0];
$images = explode(",",$o->images);


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>
	
	<?php include "Parts/meta.php" ?>
</head>
<body>

	<?php include "Parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="Product_list.php"><h4>Back</h4></a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card ">
					<div class="product-main">
						<img src="img/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?=
					array_reduce($images,function($r,$o){
						return $r."<img src='img/$o'>";
					})
					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card"  method="get" action="data/form_actions.php">
					<div class="card-section">
					<h2><?= $o->name ?></h2>
					<div class="product-description">
						<div class="product-price1">&dollar;<?= $o->price ?></div>
				
                   

					</div>
                   
				   <div class="card-section">                               
                    
                       <div> <h4> Materials:</h4> <?= $o->materials ?></div>

                 
                        </div>

					<div class="card-section">                               
                    
                          <div><?= $o->description ?></div>

                 
                        </div>
					
						<div class="card-section">
						
                         <label class="form-label">Amount</label>
                         <select name="amount" class="form-input">
                         	<!-- option*10>{$} -->
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
                        <input type="hidden" name="price" value="<?= $o->price ?>">
                      <input type="submit" class="button primary" value="Add To Cart">
                    </div>
                </form>
            </div>
        </div>
    </div>


<br>
<br>
<div>



<div class="container">
	
<div>

	<h2>Related Products</h2>

   <?php recommendedSimilar($o->category,$o->id) ?>

</div>


  </div>













<br>
<br>
<br>


<footer class="footer">
	<div class="container display-flex flex-justify-center">
		<div class="copyright">
			<h1>Abode<br>© 2020 design by Aejin Choi</h1>
		</div>
	</div>
</footer>






</body>
</html>
                       
		


