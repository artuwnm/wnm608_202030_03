<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


function showUserPage($user) {

$classes = implode(",",$user->classes);

echo <<<HTML
<nav class="nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		 <input type="text" value="$user->type">
	</div>
	<div>
		<strong>Email</strong>
		<input type="text" value="$user->email">
	</div>
	<div>
		<strong>Classes</strong>
		<input type="text" value=$classes>
	</div>

	  <form method="get" action="admin/users.php">
    	<button class="button" type="submit"><span>Submit</span></button>
	</form>
</div>
HTML;

}



?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Data</title>
	
	<?php include "../parts/meta.php" ?>

	<style>
.button {
    display: inline-block;
    border-radius: 5px;
    background-color: #73bee4;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 14px;
    padding: 9px;
    width: 100px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 10px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
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

			<?php 

			if(isset($_GET['id'])){

				showUserPage($users[$_GET['id']]);

			} else {

			?>
			<h2>User List</h2>
			<br>

			<nav class="nav">
			<ul>
			<?php

			foreach($users as $i=>$user) {
				echo "
				<li>
					<a href='admin/users.php?id=$i'>$user->name</a>
				</li>
				";
			}

			?>

			</ul>
			</nav>

			<?php 

			}

			?>
		</div>
	</div>
	
</body>
</html>'

'