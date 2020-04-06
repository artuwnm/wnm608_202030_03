<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


function showUserPage($user) {

$classes = implode(",",$user->classes);


// get user id  
$userid = $_GET['id'];




echo <<<HTML



<head>

<!-- TABLE IN ADD  -->
	<style>

		table, th, td {
		  border: 2px solid black;
		  border-color: black;
		  border-collapse: collapse;

		}
		th, td {
		  padding: 5px;
		  text-align: left;    
		}
		th{
			color: white;
			background-color: #c72101;

			width: 20%;

		}
		td{
			color: black;
			width: 80%;
		}

		.card{
    		padding: 2em;
		}

		.buttom{
			padding-top: 2em;
		}

	</style>
</head>
<!-- TABLE IN ADD  -->



	<div class="card">
	<h2>$user->name</h2>
	






<form class="form" method="post" action="post.php">
<input type="hidden" name="id" value="$userid">




	<script>document.write(makeTable('table lined all'))</script>
		<table class="table lined all">
			
			<div class="title">
			<thead>
				<tr>
					<th><label for="username">Username</label></th>
					<th><label for="type">Type</label></th>
					<th><label for="email">Email</label></th>
					<th><label for="classes">Phone</label></th>
				</tr>
			</thead>
			</div>



			<tbody>
				<tr>
					<td><input type="text" name="username" value="$user->name" class="required"></td>
					<td><input type="text" name="type" value="$user->type" class="required"></td>
					<td><input type="text" name="email" value="$user->email" class="required"></td>
					<td><input type="text" name="classes" value="$classes" class="required"></td>
				</tr>
			</tbody>

		</table>


<nav class="nav-crumbs">

	<div class="col-md-3 col-xs-2 hidden-xs menu-1">
		<ul class="display-flex1">
			<h2><li><a href="admin/users.php" class="btn btn-primary btn-outline">Back</a></li></h2>
		</ul>
	</div>
	

	<div class="col-md-6 col-xs-6 text-center"></div>


	<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
		<ul class="display-flex2">
			<div class="sub">
				<h2><li><a>
					<input type="submit" value="submit" id="send" class="btn btn-primary btn-outline">
				</a></li></h2>
			</div>
		</ul>
	</div>







</nav>



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

				<h3>Admin</h3>
				</div>

				<nav class="nav-flex flex-none">
					<ul>
						<li><a href="admin/users.php">User List</a></li>
					</ul>
				</nav>				
			</div>
		</div>
	</header>


	<div class="container">
		<div class="card soft">

			<?php 

			if(isset($_GET['id'])){

				showUserPage($users[$_GET['id']]);

			} else {

			?>



			<nav class="nav">
			<ul>
			<nav class="nav-crumbs">
				<h2>Users List</h2>
			</nav>


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

				<div class="col-md-3 col-xs-2 hidden-xs menu-1">
					<ul class="display-flex1">

					</ul>
				</div>
				

				<div class="col-md-6 col-xs-6 text-center"></div> 


				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul class="display-flex2">
						<p><a href="./product_home.php" class="btn btn-primary btn-outline">Back To Home</a></p>
					</ul>
				</div>

			<?php 

			}

			?>




		</div>
	</div>

</body>
</html>