<!DOCTYPE html>
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
</body>
</html>
<?php

//get all your data on file
$data = file_get_contents('../data/users.json');

// decode json to associative array
$json_arr = json_decode($data, true);

$userid = $_POST['id'];

unset($json_arr[$userid]);


file_put_contents('../data/users.json', json_encode($json_arr));





echo <<<HTML
<div class="container">
	<div class="card soft">

<nav class="nav-crumbs">
	<ul>
		<li class="back"><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<br>
<br>

<a class=datadeleted>Data successfully deleted</a>

</div>
</div>
HTML;

