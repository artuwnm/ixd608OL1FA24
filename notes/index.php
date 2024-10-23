<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	echo "<div> hello world </div>";
	echo "<div> bye world </div>";

	//Variables
	$a = 5;

	echo $a;

	// String Interpolation

	echo "<div>I have $a things</div>";
	echo '<div>I have $a things<div>';

	// Numbers
	// Integer
	$b = 15;

	//Flot

	$b = 0.576;

	$b = 10;

	//String
	$name = "Yerguy2";


	//Boolean
	$isOn = true;


	//Math
	//PEMDAS

	echo 5 + 4 - 2;
	echo 5 - 4 * 2;
	echo (5 - 4) * 2;

	//Concatenation

	echo "<div>b + a" . " = c<div>";
	echo "<div>$b + $a = ".($a+$b)."<div>";




	?>

	<hr>
	<div>This is my name</div>
	<div>


	<?php
	$firstname = "Wangyujing";
	$lastname = "Zhang";
	$fullname = $firstname ." ". $lastname;

	echo $fullname;

	?>


	<hr>
	<?php

	//superglobal
	//?name=Karly
	echo "<a href='?name=Karly'>visit</a><br>";
	
	if (isset($_GET['name'])) {
    echo "<div>My name is {$_GET['name']}</div>";
} else {
    echo "<div>My name is not provided.</div>";
}

	//?name=Karly&type=button
	echo "<a href='?name=Karly&type=button'>visit</a><br>";
	if (isset($_GET['type']) && in_array($_GET['type'], ['button', 'link', 'div'])) {
    echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
} else {
    echo "<div>Invalid type or not provided.</div>";
}

	?>

	<hr>
	<?php

	//Array

	// 0,1,2
	$colors = array("red","green","blue");

	echo $colors[2];

	echo"
	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]

	";

	echo count($colors);

	?>

	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>

	<hr>
	<?php

	//Associative array
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
];

echo $colorsAssociative['green'];


	?>

	<hr>
	<?php

	//Casting

	$c = "$a";
	$d = "$c*1";

	$colorsObject = (object)$colorsAssociative;

	//echo $colorsObject;

	echo "<hr>";

	//Array Index Notation

	echo $colors[0]. "<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	//Object Property Notation

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


//Function
function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";


}
	print_p($_GET);

?>


	

</body>
</html>