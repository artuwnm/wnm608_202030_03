<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

//print_p($notes);

// file_put_contents, json_encode, explode, $_POST
// CRUD - Create Read Update Delete

function showUserPage($user) {

$classes = implode(", ",$user->classes);

echo <<<HTML
<nav class="nav-crumbs">
	<ul>
		<li><a href="admin/users.php"><h5>< Back</h5></a></li>
	</ul>
</nav>
<div style="padding-left: 50px">
	<h2>$user->name</h2>

	<form method="post" action="" >
		<table class="table lined all striped" style="width:100%">
			<tbody>
				<tr>
				    <th><label for="name"><strong>Username</strong></label></th>
					<td><input type="text" name="name" value="$user->name" style="border:none; font-size:1em;"></td>
				</tr>
			</tbody>
			<tbody>
				<tr>
				    <th><label for="name"><strong>Type</strong></label></th>
					<td><input type="text" name="type" value="$user->type" style="border:none; font-size:1em;"></td>
				</tr>
			</tbody>
			<tbody>
				<tr>
				    <th><label for="name"><strong>Email</strong></label></th>
					<td><input type="text" name="email" value="$user->email" style="border:none; font-size:1em;"></td>
				</tr>
			</tbody>
			<tbody>
				<tr>
				    <th><label for="name"><strong>Clasees</strong></label></th>
					<td><input type="text" name="classes" value="$classes" style="border:none; font-size:1em;"></td>
				</tr>
			</tbody>
		</table>
		<br><br>
		<div class="grid gap">
			<div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-2">
				<button class="button-small primary" type="submit" name="submit">SUBMIT</button>
			</div>
			<div class="col-xs-12 col-md-2">
				<button class="button-small secondary" type="cancel" name="cancel">CANCEL</button>
			</div>
			<div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-2">
			<button class="button-small secondary" type="delete" name="delete">DELETE</button>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		</div>
	</form>
</div>
HTML;

}


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="logo nav-flex flex-none">
					<a href="index.php"><img src="img/logo-outline.png" alt="logo-outline"></a>
			</div>
			<div class="flex-stretch flex-justify-center display-flex">
				<h1 style="padding-top: 15px">ADMIN PAGE</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card">

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


<!-- 	<script>
		const makeTable = (classes='') => {
			const head = ['ID', 'Product No.','Product Name','Type','Price','Stock'];
			const body = [
			['142',"Pin 1",'Pin','$3.99','50'],
			['143',"Pin 2",'Pin','$3.99','50'],
			['144',"Patch 1",'Patch','$7.99','10'],
			];

			// let ran = Math.floor(Math.random()*links.length);
			return `
			<table class="${classes}">
			<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
			<tbody>${body.reduce((r,o,i)=>r+
				`<tr>${
					[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
				}</tr>`,'')
		}</tbody>
		</table>
		`;
	}
	</script>	
	<h5>Checkout Table</h5>
		<script>document.write(makeTable('table lined horizontal striped'))</script> -->

	<?php include "../parts/footer.php" ?>

</body>
</html>