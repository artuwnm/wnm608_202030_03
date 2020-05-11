<?php

include_once "lib/php/functions.php";

//session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>

    <?php include "parts/navbar.php" ?>
	<!-- banner -->
    <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url('images/heroimage.jpg')">
		<div class="card-section">
			<a href="product_list.php" class="form-button_frame">VIEW COLLECTION</a>
		</div>
	</div>
  	

	<div class="container">
			<h5>NEW JEWELRY</h5>
			<?php recommendedCategory('earrings') ?>
		</div>


        <div>
        <?php include "parts/footer.php" ?>
        </div>


	
	
</body>
</html>