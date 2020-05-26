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
	// https://www.php.net/

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

	<hr>
	<div>This is my name</div>
	<div>
	<?php
	$firstname = "Zhuwei";
	$lastname = "Li";
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

	// Array 0=red;1=green;2=blue,
	$colors = array("red","green","blue");

	echo $colors[1];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
		";

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

	<hr>

	<?php

	// Casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	// echo $colorsObject;

	echo "<hr>";

	// Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	// Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	?>

	<hr>

	<?php

	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>",print_r($colorsObject),"</pre>";

	// Functions
	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($_GET);


	?>

</body>
</html>