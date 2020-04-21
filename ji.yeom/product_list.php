<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card">
			<div class="grid gap">

			<?php

			$rows = getRows(
				makeConn(),
				"SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				"
			); // ` use for names of columns or tables // " for values

			echo array_reduce(
				$rows,
				'productListTemplate'
			);

			?>
			</div>
		</div>
	</div>

</body>
</html>