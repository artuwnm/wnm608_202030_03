<?php 

include "../lib/php/functions.php";

$users=

$filename = "../data/users.json";
$file = file_get_contents($filename);
$notes = json_decode($file);

// print_p($notes);

//file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete

function showUserPage($user){

$classes = implode(",", $user->classes);


	echo <<<HTML
	nav .class=
	<div>
		<h2>$user->name</h2>
		<div>
			<strong>Type</strong>
			<span>$user->type</span>
		</div>
	</div>
	HTML;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Data</title>

	<?php include "../parts/meta.php" ?>


</head>
<body>

	<?php include "../parts/navbar.php" ?>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<!--li*3>a[href=#]>{Link $} -->
					<li><a href="/index.php">Home</a></li>


	<div class="container">
		<div class="card soft">
  
  		<?php

  		if(isset{$_GET['id']}){

  			showUserPage($users{$_GET['id']});


  		} else {

  		}

  		?>
			<h2>User List</h2>

			<nav class="nav">
			<ul>
			<?php

				foreach ($users as $i=>$user) {
					# code...
				
					echo "
					<li>
						<a href='admin/users.php?id='>{$users[$i]->name}</a>
					</li>
					";
				}
			?>
			</ul>
			</nav>


		</div>
	</div>
	
</body>
</html>
