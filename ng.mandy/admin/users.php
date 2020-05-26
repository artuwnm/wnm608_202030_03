<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = getData($filename);

// print_p($users);
// print_p(["POST",$_POST,"GET",$_GET]);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


$empty_user = (object)[
	"name"=>"",
	"email"=>"",
	"password"=>""
];


// LOGIC
if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->password = $_POST['user-password'];

			file_put_contents($filename,json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->password = $_POST['user-password'];

			$id = count($users);
			array_push($users, $empty_user);

			file_put_contents($filename, json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			array_splice($users,$_GET['id'],1);

			file_put_contents($filename,json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}


function showUserPage($user) {

$id = $_GET['id'];
$password = $user->password;
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a></li>
HTML;

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">
<h2>$user->name</h2>

<div class="form-control">
	<strong>Email</strong>
	<span>$user->email</span>
</div>
<div class="form-control">
	<strong>Password</strong>
	<span>$password</span>
</div>
</div>
HTML;



echo <<<HTML
<nav class="nav-pills">
	<div class="card soft">
	<ul>
		<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		<li class="flex-stretch"></li>
		$deletebutton
	</ul>
	</div>
</nav>
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			$data_show
		</div>
		<div class="col-xs-12 col-md-8">
			<div class="card soft">
			<h2>$addoredit User</h2>
			<div class="form-control">
				<label class="form-lable" for="user-name">Name</label>
				<input class="form-input" id="user-name" name="user-name" value="$user->name">
			</div>
			
			<div class="form-control">
				<label class="form-lable" for="user-email">Email</label>
				<input class="form-input" id="user-email" name="user-email" value="$user->email">
			</div>
			<div class="form-control">
				<label class="form-lable" for="user-password">Password</label>
				<input class="form-input" id="user-password" name="user-password" value="$password">
			</div>
			<div class="form-control">
				<input type="submit" class="form-button confirm" value="Submit">
			</div>
			</div>
		</div>
	</div>
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
				<h1>Admin</h1>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="admin/users.php">User List</a></li>
					<li><a href="admin/users.php?id=new">Add New User</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

			<?php 

			if(isset($_GET['id'])){
				// conditional ternary
				// ifthis ? iftruedothis : iffalsedothis
				showUserPage(
					$_GET['id']=="new" ? 
					$empty_user :
					$users[$_GET['id']]
				);

			} else {

			?>
			<div class="card soft">
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
			</div>

			<?php 

			}

			?>
	</div>
	
</body>
</html>