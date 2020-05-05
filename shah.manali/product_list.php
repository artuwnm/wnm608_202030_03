
<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>

</head>
<body>

  <?php include "parts/navbar.php" ?>


	
		<div class="container">
			<div class="card soft">
			<h2>Product List</h2>

		<div class="grid gap">

			<?php
            
            $conn = makeConn();

            $rows =getRows
            (makeConn(),
            	"SELECT  *
            	FROM `products`
            	ORDER BY `date_create` DESC
            	limit 12
            	"

            );


			echo array_reduce(
                $rows,
                'productListTemplate'
			)

			?>
		</div>
	</div>
	</div>

</body>
</html>