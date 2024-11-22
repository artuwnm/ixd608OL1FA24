<?php 

include "../lib/php/functions.php";

// $filename = "notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

//print_p($note);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
   <?php include "../parts/meta.php"; ?>
</head>

<body>
	<div class="container">   
	    <div class="soft card">
	      	<h2>Notes</h2>
	      	<?php

	      	for ($i=0; $i < count($notes_object->notes); $i++) { 
	      		echo "<li> {$notes_object->notes[$i]} </li>";
	      	}

	      	?>
	    </div>


	    <div class="soft card">
	      	<h2>Users</h2>
	      	<?php

	      	for ($i=0; $i < count($users_array); $i++) { 
	      		echo "<li> 
	      		<strong>{$users_array[$i]->name}</strong>
	      		<span>{$users_array[$i]->type}</span>
	      		</li>";
	      	}

	      	?>
	    </div>


	</div>
</body>
</html>