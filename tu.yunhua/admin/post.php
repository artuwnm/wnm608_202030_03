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
				<h3>Admin</h3>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>				
		</div>
	</header>
</body>
</html>


<?php


   $myFile = "../data/users.json";
   $arr_data = array(); 

  try
  {
	   $classes_data = explode(", ", $_POST['classes']);
	   $formdata = array(
	      'name'=> $_POST['username'],
	      'type'=> $_POST['type'],
	      'email'=>$_POST['email'],
	      'classes'=> $classes_data
	   );

	   $jsondata = file_get_contents($myFile);

	   $arr_data = json_decode($jsondata, true);

	   $arr_data[$_POST['id']] = $formdata;

	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

	   if(file_put_contents($myFile, $jsondata)) {
	        echo 'Data successfully saved';
	    }
	   else 
	        echo "error";

   }
   catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
   }

echo <<<HTML
<nav class="nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
HTML;

?>