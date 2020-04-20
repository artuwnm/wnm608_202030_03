<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$rows = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
);

// print_p($rows);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Store: Product List</title>
	<?php include "parts/meta.php" ?>
</head>
	
</head>
<body>
	<header class="navbar">
		<div class="display-flex">
			<div class="flex-stretch">
				<h1>Logo</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
				<!-- 	li*3>a[href=#]>{Link $} -->
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="cart.php">Cart</a></li>				
				</ul>
				<?php

				$onn =  makeConn();
				$result = $conn->query("SELECT * FROM products");
				while($row = $result->fetch_object()){
					print_p($row);
					echo "<div>$row->price</div>";
				}
				?>

			</nav>
		</div>
	</header>
</body>
</html>