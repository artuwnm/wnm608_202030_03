<?php 

include "../lib/php/functions.php";


$notes = getData("notes.json");
$users = getData("../data/users.json");


// print_p($users);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learning Data</title>
	
	<?php include "../parts/meta.php" ?>
</head>
<body>
 
  <div class="container">
		<div class="card soft">
			<h2>Notes</h2>

			<ul>
			<?php
			for($i=0; $i<count($notes->notes); $i++){
				echo "<li>{$notes->notes[$i]}</li>\n";
			}
			?>
			</ul>
		</div>

		<div class="card soft">
			<h2>Users</h2>

			<ol>
			<?php

			for($i=0; $i<count($users); $i++){
				echo "
				<li>
					<strong>{$users[$i]->name}</strong>
					<span>[{$users[$i]->type}]</span>
				</li>
				";
			}

			?>
			</ol>
		</div>

<!-- CARD DETAILS -->
    <div class="card">
			<h6>CARD DETAILS</h6>
			<div class="form-control">
				<label class="form-label" for="input-example1">Enter your email to checkout</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>
		</div>
    <!-- ADDRESS -->
    <div class="card">
			<h6>ADDRESS</h6>
			<div class="form-control">
				<label class="form-label" for="input-example1">Enter your email to checkout</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>
			<div class="form-control">
				<label class="form-label" for="input-example1">Enter your email to checkout</label>
				<input type="text" class="form-input" placeholder="Text" id="input-example1">
			</div>
		</div>

		<div class="form-control">
				<a href="confirmation.php" class="form-button">PLACE ORDER</a>
			</div>
<!-- footer -->
		<div>
        <?php include "../parts/footer.php" ?>
        </div>
</body>
</html>