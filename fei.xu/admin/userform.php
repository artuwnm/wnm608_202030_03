<?php include "../parts/meta.php" ?>
<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
					<li><a href="admin/userform.php">Add User</a></li>
					<!-- <li><a href="admin/userform2.php">Delete User</a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
	<div class="card soft">
<nav class="nav-crumbs">
	<ul>
		<li class="back"><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div class=container2>
<form class="form2" method="post" action="post2.php">


<div class="int">
	<label for="username">Username:</label>
	<input type="text" name="username" value="" class="required">
</div>

<div class="int">
		<label for="type">Type:</label>
		<input type="text" name="type" value="" class="required">
</div>

<div class="int">
		<label for="email">Email:</label>
		<input type="text" name="email" value="" class="required">
		
</div>

<div class="int">
		<label for="classes">Classes:</label>
		<input type="text" name="classes" value="" class="required">
	</div>
<div class="sub">
		<input type="submit" value="add" id="send">
</div>

	</div>

</div>

</form>
</div>