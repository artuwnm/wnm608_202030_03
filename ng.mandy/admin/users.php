<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");

//print_p($_GET);
//print_p($_POST);


// file_put_contents, json_encode, explode, $_POST

// CRUD - Create Read Update Delete


function showUserPage($id, $user) {

$classes = implode(", ", $user->classes);

echo <<<START
<nav class="nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>

<form action="admin/users.php" method="post">
<input type="hidden" value="$id" name="id" id="id">
<div class="card.flat">
	<h2>$user->name</h2>

	<div class="form-control">
		<label class="form-label" for="user_type">Type</label>
		<input type="text" class="form-input" value="$user->type" name="user_type" id="user_type">
	</div>

	<div class="form-control">
		<label class="form-label" for="user_name">Name</label>
		<input type="text" class="form-input" value="$user->name" name="user_name" id="user_name">
	</div>

	<div class="form-control">
		<label class="form-label" for="user_email">Email</label>
		<input type="text" class="form-input" value="$user->email" name="user_email" id="user_email">
	</div>

	<div class="form-control">
		<label class="form-label" for="user_classes">Classes</label>
		<input type="text" class="form-input" value="$classes" name="user_classes" id="user_classes">
	</div>
	
	<div class="form-control">
		<button type="submit" name="action" value="save" class="form-button">Save</button>
	</div>
START;

if ($id >= 0) {
echo <<<DELETE
	<div class="form-control">
		<button type="submit" name="action" value="delete" class="form-button">Delete</button>
	</div>
DELETE;
}

echo <<<END
</div>
</form>
END;

}

?>

<!DOCTYPE html>
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
					<li><a href="admin/users.php?id=-1">Add User</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php 

			if (isset($_GET['id'])) {

				$id = $_GET['id'];
				if ($id >= 0 && $id < count($users)) {
					showUserPage($id, $users[$id]);
				} else {
					$new_user = (object) array('type'=>'', 'name'=>'', 'email'=>'', 'classes'=>array());
					showUserPage($id, $new_user);
				}

			} else {

				if (isset($_POST['id'])) {
					$id = $_POST['id'];
					if ($_POST['action'] == 'save') {
						$cur_user = NULL;
						if ($id >= 0 && $id < count($users)) {
							$cur_user = $users[$id];
						} else {
							$cur_user = (object) array();
							array_push($users, $cur_user);
						}
						$cur_user->name = $_POST['user_name'];
						$cur_user->type = $_POST['user_type'];
						$cur_user->email = $_POST['user_email'];
						$cur_user->classes = explode(", ", $_POST['user_classes']);
					} elseif ($_POST['action'] == 'delete') {
						\array_splice($users, $id, 1);
					}

					putData("../data/users.json", $users);
				}

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
</body>
</html>