<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

// print_p($users);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


function showUserPage($user) {

$classes = implode(",",$user->classes);







echo <<<HTML



	<div class="card">
	<h2>$user->name</h2>
	

	<script>document.write(makeTable('table lined all'))</script>
		<table class="table lined all">
			
			<div class="title">
			<thead>
				<tr>
					<th>Username</th>
					<th>Type</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
			</thead>
			</div>


			<tbody>
				<tr>
					<td>$user->name</td>
					<td>$user->type</td>
					<td>$user->email</td>
					<td>$classes</td>
				</tr>
			</tbody>

		</table>


<nav class="nav-crumbs">

	<div class="col-md-3 col-xs-2 hidden-xs menu-1">
		<ul class="display-flex1">
			<h5><li><a href="admin/users.php" class="btn btn-primary btn-outline">Back</a></li></h5>
		</ul>
	</div>
	

	<div class="col-md-6 col-xs-6 text-center"></div>


	<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
		<ul class="display-flex2">
			<h5><li><a href="admin/users.php" class="btn btn-primary btn-outline">Submit</a></li></h5>
		</ul>
	</div>

</nav>



HTML;

}

















?><!DOCTYPE html>
<html lang="en">



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
			color: white;
			width: 80%;
		}

		.card{
    		padding: 2em;
		}

		.buttom{
			padding-top: 2em;
		}


	</style>



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

		<nav class="nav-crumbs">
			<h3 style="color:#c72101">User Information</h3>

			<body>
				<table style="width:100%">
				<form action="/users_information.php"></form>


				<div class="form-group-contact">
				  <tr>
				    <th><label for="name">Username: </label></th>
				    <td><input type="text" class="form-control" id="name" name="name" placeholder="Your Name"></td>
				  </tr>
				</div>



					
<!-- 				<div class="form-group-contact">
				  <tr>
				    <th><label for="lname"> name: </label></th>
				    <td><input type="text" class="form-control" id="lname" name="lname" placeholder="Your Last Name"></td>
				  </tr>
				</div>


				<div class="form-group-contact">
				  <tr>
				    <th><label for="fname">First name: </label></th>
				    <td><input type="text" class="form-control" id="fname" name="fname" placeholder="Your First Name"></td>
				  </tr>
				</div> -->



				<div class="form-group-contact">
				  <tr>
				    <th><label for="type">Type: </label></th>
				    <td><input type="type" class="form-control" id="type" name="type" placeholder="Your Type"></td>
				  </tr>
				</div>



				<div class="form-group-contact">
				  <tr>
				    <th><label for="email">Email:</label></th>
				    <td><input type="email" class="form-control" id="email" name="email" placeholder="Your Email"></td>
				  </tr>
				</div>



				<div class="form-group-contact">
				  <tr>
				    <th rowspan="2"><label for="phone">Phone:</label></th>
				    <td><input type="phone" class="form-control" id="phone" name="phone" placeholder="Your Mobile phone"></td>
				  </tr>
				</div>



<!-- 				<div class="form-group-contact">
				  <tr>
				    <td><input type="phone" class="form-control" id="phone" name="phone" placeholder="Your Telephone"></td>
				  </tr>
				</div>



				<div class="form-group-contact">
				  <tr>
					<th><form action="/action_page.php">Describe Yourself:</th>
  					<td><textarea name="message" class="form-control" placeholder="More About Yourself" style="width:1000px; height:200px; "></textarea></td>
  					<br>
				  </tr>
				</div> -->


				</form>



				</table>
			</body>

		<nav class="buttom">

			<div class="col-md-3 col-xs-2 hidden-xs menu-1">
				

				<ul class="display-flex1">
					<!-- <button type="submit" form="nameform" value="Submit" class="btn btn-primary btn-outline">Submit</button> -->
					<a href="admin/submit.php">
						<button type="submit" form="nameform" value="Submit" class="btn btn-primary btn-outline">Submit</button>
					</a>
				</ul>


			</div>

			<div class="col-md-6 col-xs-6 text-center"></div> 

			<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
				
				<ul class="display-flex2">
					<a href="admin/users.php">
						<button type="submit" form="nameform" value="Submit" class="btn btn-primary btn-outline">Back</button>
					</a>
				</ul>

			</div>

		</nav>
		</nav>
</nav>



			<?php 

			}

			?>




		</div>
	</div>

</body>
</html>