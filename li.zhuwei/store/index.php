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

	// String ("value of text")
	$name = "Yerguy2";

	// Boolean ture or flase 
	$isYes = true;

	// Math 
	// PEMDAS (order of Operation)
	echo (5-4) * 2;

	// Concatenation
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = " . ($b+$a) . "</div>";



	?>
</body>
</html>