<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete




$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];



// LOGIC
if(isset($_POST['user-name'])) {
	$users[$_GET['id']]->name = $_POST['user-name'];
	$users[$_GET['id']]->type = $_POST['user-type'];
	$users[$_GET['id']]->email = $_POST['user-email'];
	$users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

	file_put_contents($filename,json_encode($users));
}









function showUserPage($user) {

$classes = implode(",",$user->classes);
// get user id  
$userid = $_GET['id'];




echo <<<HTML

<!-- TABLE IN ADD  -->
<head>
	<style>
		table, th, td {
		  border: 2px solid black;
		  border-color: black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 10px;
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



<form class="form" method="post" action="admin/post.php">
<input type="hidden" name="id" value="$userid">




	<h2>$user->name</h2>


		<nav class="nav-crumbs">

			<body>
				<table style="width:100%">
				<form action="/users_information.php"></form>


				<div class="form-group-contact">
				  <tr>
				    <th><label for="name">Username: </label></th>
				    <td><input type="text" name="username" value="$user->name" class="required"></td>
				  </tr>
				</div>


				<div class="form-group-contact">
				  <tr>
				    <th><label for="type">Type: </label></th>
				    <td><input type="text" name="type" value="$user->type" class="required"></td>
				  </tr>
				</div>



				<div class="form-group-contact">
				  <tr>
				    <th><label for="email">Email:</label></th>
				    <td><input type="text" name="email" value="$user->email" class="required"></td>
				  </tr>
				</div>

				<div class="form-group-contact">
				  <tr>
				    <th rowspan="2"><label for="phone">Phone:</label></th>
				    <td><input type="text" name="classes" value="$classes" class="required"></td>
				  </tr>
				</div>
				</form>
				</table>
			</body>

		</nav>
	</nav>




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


</form>

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
						<li><a href="admin/userform.php">Add User</a></li>
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



				<h2>Users List</h2>
			

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

