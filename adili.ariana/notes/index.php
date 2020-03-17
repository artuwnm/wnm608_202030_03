<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// phpinfo();

	echo "<div>Hello world</div>";

	// Variables 
	$a = 5

	echo $a;

	// String Interpolation

	// echo "<div>I have $a things"</div>";


	?>

	<hr>
	<div>Here is some html outside of the php</div>

	<?php
	
	// PHP is a loosely typed language 

	// Number
	// Float
	$b = 0.3333;

	// Integer 
	$b = 15;

	// String 
	$name = "Your name";

	// Boolean 
	$isYes = true;

	// Math
	//PEMDAS Order of Operation
	echo (5-4) * 2;

	// Concatenation
	echo "<div>b + a " . " = c </div>";
	echo "<div>$b + $a " . " = ($b + $a) </div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>
		<?php
	$firstname = "Ariana";
	$lastname = "Adili";
	$fullname = "$firstname.$lastname";
	echo $fullname;
	?>
	</div>

	
	

</body>
</html>