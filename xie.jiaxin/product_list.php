<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>
	
	<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	
	
	<?php

	$data = getData("
		SELECT *
		FROM `products`
		ORDER BY `date_create` ASC
		LIMIT ".($pageoffset*$pagelimit).",$pagelimit
		");

	echo array_reduce($data,'productListTemplate');

	?>

	

	<?php

	// $rows = getRows(
	// makeConn(),
	// "SELECT *
	// FROM `products`
	// ORDER BY `date_create` ASC
	// LIMIT 12
	// "
	// );

	// print_p($rows);
	
	?>

		
	
</body>
</html>