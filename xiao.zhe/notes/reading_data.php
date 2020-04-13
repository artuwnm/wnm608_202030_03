<?php

include "../lib/php/function.php";

$filename = "notes.json";
$file = file_get_contents($filename);
$notes = json_decode($file);

// $filename = "../data/user.json";
// $file = file_get_contents($filename);
// $users = json_decode($file);

$users = getData("../data/users.json");



print_p($users);

?><!DOCTYPE html>
<html>
<head>
	<title>Learing Data</title>

	<?php include "../parts/meta.php" ?>

</head>

</head>
<body>

	<?php include "../parts/navbar.php" ?>

	<div class="container">
		<div class="card">
			<h2>Notes</h2>

			<ul>
			<?php

			for($i=0; $i<count($notes->notes); $i++){
				echo "<li>{$notes->notes[$i]}</li>\n";
			}

			?>
			</ul>
		</div>
		<div class="card">
			<h2>Users</h2>

			<ol>
			<?php

			for($i=0; $i<count($users); $i++){
				echo "
				<li>
					<strong>{$users[$i]->name}</strong>
					<span>[{$users[$i]->type}]</span>
					<span>[{$users[$i]->email}]</span>
				</li>
				";
			}

			?>
			</ol>
		</div>
	</div>
	
</body>
</html>