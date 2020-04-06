<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);






function showUserPage($user) {

$classes = implode(", ",$user->classes);
$userid = $_GET['id'];

echo <<<HTML
<nav class="nav-crumbs">
	<ul>
		<li class="back"><a href="admin/users.php">Back</a></li>
	</ul>
</nav>


<div class=container2>

<form class="form2" method="post" action="post.php">
<input type="hidden" name="id" value="$userid">

<div class="int">
	<label for="username">Username:</label>
	<input type="text" name="username" value="$user->name" class="required">
</div>

<div class="int">
		<label for="type">Type:</label>
		<input type="text" name="type" value="$user->type" class="required">
</div>

<div class="int">
		<label for="email">Email:</label>
		<input type="text" name="email" value="$user->email" class="required">
		
</div>

<div class="int">
		<label for="classes">Classes:</label>
		<input type="text" name="classes" value="$classes" class="required">
	</div>
<div class="sub">
		<input type="submit" value="submit" id="send">
</div>
</div>

</div>
</form>
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

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
					<li><a href="admin/userform.php">Add User</a></li>
					<!-- <li><a href="admin/userform2.php">Delete User</a></li>
				</ul> -->
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

			<nav class="nav">
			<ul>
			<?php

			foreach($users as $i=>$user) {
				echo "
				<li>
					<a href='admin/users.php?id=$i'>$user->name</a> 
				    <form class='form3' method='post' action='admin/userform2.php'>
				    <input type='hidden' name='id' value='$i'>
				    <button class=delete>delete</button>
				    </form>


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
</html>