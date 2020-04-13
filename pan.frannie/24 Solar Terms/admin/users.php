<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


function showUserPage($user) {

$classes = implode(", ",$user->classes);

echo <<<HTML
<nav class="nav-crumbs">
	<ul>
		<li><a href="users.php">Back</a></li>
	</ul>
</nav>



<div>
    <h2>$user->name</h2>
        <div class="form-control">

				<label class="form-label" for="input-example1">Type</label>
				<input type="text1" class="form-input" placeholder="$user->type" id="input-example1">
			</div>

			<div class="form-control">
				<label class="form-label" for="input-example2">Email</label>
				<input type="text1" class="form-input" placeholder="$user->email" id="input-example2">
			</div>

			<div class="form-control">
				<label class="form-label" for="input-example3">Classes</label>
				<input type="text1" class="form-input" placeholder="$classes" id="input-example3">
        </div>
</div>





<div class="btnstyle Submit">
                <button class="btn first">Submit</button>
</div>


HTML;

}





?><!DOCTYPE html>
<html lang="en">
<head>
	<title>User Data</title>
	
	<?php include "../parts/meta2.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h2>Admin</h2>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="users.php">User List</a></li>
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
            


			<nav class="nav-user">
			<ul>
			<?php

			foreach($users as $i=>$user) {
				echo "
				<li>
					<a href='users.php?id=$i'>$user->name</a>
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