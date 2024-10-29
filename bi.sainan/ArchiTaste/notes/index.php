<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "<div>Hello World</div>";
	echo "<div>Goodbye World</div>";

	$a = 5;
	echo $a;

	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';

	$b = 15;
	$b = .576;
	$b = 10;

	$name = "22";

	$isOn = true;

	echo 5+4-2;

	echo "<div>b+a" . "=c</div>";
	echo "<div>$b*$a=".($a*$b)."</div>";

	?>

	<hr>

	<div>My Name</div>

	<?php
	$firstname = "Sainan";
	$lastname = "Bi";
	$fullname = "$firstname $lastname";

	echo "$fullname";
	echo "<div>Fullname: "."$firstname $lastname"."</div>";

	?>

	<hr>

	<?php

	echo "<div>My name is {$_GET['name']}</div>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	?>

	<hr>

	<?php

	$colors = array("red","green","blue");
	echo $colors[0];
	echo "
	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]
	";
	echo count($colors)

	?>

	<div style="color: <?= $colors[1] ?>">
		Green
	</div>

	<hr>

	<?php

	$colorsAssociative=[
		"red"=>"#f00",
		"green"=>"#0f0",
		"blue"=>"#00f",
	];
	echo $colorsAssociative['green'];

	?>

	<hr>

	<?php 

	// casting
	$c="$a";
	$d=$c*1;

	$colorsObject = (object)$colorsAssociative;

	echo $colors;

	echo "<hr>";

	// array index notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	// object index notation
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

	// function
	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($_GET);

	?>

</body>
</html>