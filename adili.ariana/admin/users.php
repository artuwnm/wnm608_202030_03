<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);




function showUserPage($user) {

$classes = implode(", ",$user->classes);

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
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
HTML;

}






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
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Name: <input type="text" name="name" value="<?php echo $name;?>">
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	  <span class="error">* <?php echo $emailErr;?></span>

	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>

</div>








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