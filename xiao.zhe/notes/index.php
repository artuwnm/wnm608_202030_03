<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	// phpinfo();
	// cmd + /
	/* comment */ 
	// cmd + option + /

	echo "<div>Hello World</div>";

	// Variables
	$a = 5;

	echo $a;


	// String Interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';

	?>

	<hr>
	<div>Here's some html outside of the php.</div>

	<?php

	// PHP is a loosely typed langauge

	// Number
	// Float
	$b = 0.3333;
	// Integer
	$b = 15;

	// String
	$name = "Yerguy2";

	// Boolean
	$isYes = true;


	// Math
	// PEMDAS (Order of Operation)
	echo (5 - 4) * 2;

	// Concatenation
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = " . ($b+$a) . "</div>";

	?>

	<hr>
	<div>This is my name</div>
	<div>
	<?php
	$firstname = "Hamilton";
	$lastname = "Cline";

	$fullname = $firstname.$lastname;
	$fullname = "$firstname $lastname";

	echo $fullname;
	?>
	</div>

	<hr>

	<?php

	// Superglobal
	// ?name=Something
	echo "<div>My name is {$_GET['name']}</div>";

	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	?>

	<hr>

	<?php

	// Array
	$colors = array("red","green","blue");

	echo $colors[1];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
		";

	echo count($colors);

	?>

	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>

	<?php

	// Associative Array
	$colorsAssociative = [
		"red"=>"#f00",
		"green"=>"#0f0",
		"blue"=>"#00f"
	];

	echo $colorsAssociative['red']."<br>";

	?>

</body>
</html>