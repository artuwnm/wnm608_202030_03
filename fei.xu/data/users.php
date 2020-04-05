<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Data</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Users</h2>

			<ol>
			<?php

			for($i=0; $i<count($users); $i++){
				echo "
				<li>
					<strong>{$users[$i]->name}</strong>
					<span>[{$users[$i]->type}]</span>
				</li>
				";
			}

			?>
			</ol>
		</div>
	</div>
	
</body>
</html>