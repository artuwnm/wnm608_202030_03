<?php

include "../lib/php/function.php";

$filename = "../data/users.json";
$users = getData("../data/users.json");
// print_p($users);
// print_p(["POST",$_POST,"GET",$_GET]);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];



// LOGIC
if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
			$users[$_GET['id']]->name = $_POST['user-name'];
			$users[$_GET['id']]->type = $_POST['user-type'];
			$users[$_GET['id']]->email = $_POST['user-email'];
			$users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

			file_put_contents($filename,json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->classes = explode(", ",$_POST['user-classes']);

			$id = count($users);

			$users[] = $empty_user;
			// array_push($users,$empty_user);

			file_put_contents($filename,json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			array_splice($users,$_GET['id'],1);

			file_put_contents($filename,json_encode($users));

			header("location:{$_SERVER['PHP_SELF']}");
	}
}





function showUserPage($user) {

$id = $_GET['id'];
$classes = implode(", ",$user->classes);
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$deletebutton = $id=="new" ? '' : <<<HTML
<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a></li>
HTML;

$data_show = $id=="new" ? "" : <<<HTML
<div class="card soft">
<h2>$user->name</h2>
<div class="form-control">
	<strong>Type</strong>
	<span>$user->type</span>
</div>
<div class="form-control">
	<strong>Email</strong>
	<span>$user->email</span>
</div>
<div class="form-control">
	<strong>Classes</strong>
	<span>$classes</span>
</div>
</div>
HTML;



echo <<<HTML
<nav class="nav-pills">
	<div class="card">
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
				<label class="form-lable" for="user-type">Type</label>
				<input class="form-input" id="user-type" name="user-type" value="$user->type">
			</div>
			<div class="form-control">
				<label class="form-lable" for="user-email">Email</label>
				<input class="form-input" id="user-email" name="user-email" value="$user->email">
			</div>
			<div class="form-control">
				<label class="form-lable" for="user-classes">Classes</label>
				<input class="form-input" id="user-classes" name="user-classes" value="$classes">
			</div>
			<div class="form-control">
				<input type="submit" class="form-button" value="Submit">
			</div>
			</div>
		</div>
	</div>
</form>
HTML;

}


?><!DOCTYPE html>
<html>
<head>
	<title>Users php</title>

	<?php include "../parts/meta.php" ?>

</head>

</head>
<body>

	<!-- <?php include "../parts/navbar.php" ?> -->

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch"></div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="admin/users.php">User List</a></li>
					<li><a href="admin/users.php?id=new">Add New User</a></li>
				</ul>
			</nav>
		</div>
	</header>	

	<div class="container">
		<div class="card">
			<h2>Users</h2>

			<ol>
			<?php

			for($i=0; $i<count($users); $i++){
				echo "
				<li>
					<strong>{$users[$i]->name}</strong>
					<span>[{$users[$i]->type}]</span>
					<span>[{$users[$i]->email}]</span>
				</li>
				";
			}

			?>
			</ol>
		</div>
	</div>

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
		<div class="card">

			<h2>Users</h2>
			<nav class="navbar">
			<ul>
			<?php

			foreach ($users as $user) {
			
				echo "
				<li>
					<a href='admin/users.php?id='>$user->name</a>
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