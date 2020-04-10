<?php include "../parts/meta.php" ?> 

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
	
	<form class="form2" method="post" action="admin/post2.php">


	<h2>Join Us</h2>



		<nav class="nav-crumbs">

			<body>
				<table style="width:100%">
				<form action="/users_information.php"></form>

				<form class="form2" method="post" action="post2.php">

				<div class="form-group-contact">
				  <tr>
				    <th><label for="name">Username: </label></th>
				    <td><input type="text" name="username" value="" class="required"></td>
				  </tr>
				</div>


				<div class="form-group-contact">
				  <tr>
				    <th><label for="type">Type: </label></th>
				    <td><input type="text" name="type" value="" class="required"></td>
				  </tr>
				</div>



				<div class="form-group-contact">
				  <tr>
				    <th><label for="email">Email:</label></th>
				    <td><input type="text" name="email" value="" class="required"></td>
				  </tr>
				</div>

				<div class="form-group-contact">
				  <tr>
				    <th rowspan="2"><label for="phone">Phone:</label></th>
				    <td><input type="text" name="classes" value="" class="required"></td>
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


	<div class="sub">
		<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
			<ul class="display-flex2">
				<h2><li><a>
					<input type="submit" value="add" id="send" class="btn btn-primary btn-outline">
				</a></li></h2>
			</ul>
		</div>
	</div>

</nav>


	</form>	

</div>
</div>

