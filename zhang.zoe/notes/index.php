<!DOCTYPE html>
<htnl lang="eng">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<?php 
	//phpinfo();
	//cmd + /
	/* comment */
	//cmd + option +/


echo "<div>hello world</div>";

	//Vairables 
	$a = 5;

	echo $a;


	// String Interpolation
	echo "<div>I have $a things </div>";
	echo '<div>I have $a things </div>';

 ?>

	<hr>
	<div>Here's some html outside of the php.</div>

	<?php
	// PHP is a loosely typed language

	// Number
	// Float
	$b = 0.3333;
	//Integer
	$b = 15;

	// String
	$name = "Yerguy";

	// Boolean
	$isYes = true;


	//Math
	//PEMDAS (Order of Operation)
	echo  (5-4)*2;


	// Concatenation
	echo "<div>b + a "." = c</div>";
	echo "<div>$b + $a =". ($b+$a) ."</div>";


	?>

	<hr>
	<div>This is my name</div>
	<div>
	<?php
	$firstname = "Zoe";
	$lastname = "Zhang";

	$fullname = $firstname.$lastname;
	$fullname = "$firstname $lastname";

	echo $fullname;
	?>
	</div>


	<hr>
	<?php


	// Superglobal
	// ?Name = Something 
	echo "<div>My Name is {$_GET['name']}</div>";

	// ?Name = Something&type=something
	echo "<{$_GET['type']}>My Name is {$_GET['name']}</{$_GET['type']}>";

	?>

	<hr>

	<?php

	//Array
	$colors = array("red","green","blue");

	echo $colors[1];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
		";

	echo count($colors);


	?>

	<div style="color:<?=$colors[1]?>">
		This text is green
	</div>

	<?php

		//Associative Array
	$colorsAssociative =[
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

	// echo $colorsObjects objects are not allowed to be echoed out;

	echo "<hr>";

	//Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";


	//Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

	?>

	<hr>
	<?php

	print_r($colors);
	echo "<hr";
	print_r($colorsAssociative);
	echo "<hr>";
	echo "<pre>",print_r($colorsObject),"</pre>";


	// Functions
	function print_p($v){
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($_GET);

	?>


</body>
</htnl>

