<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include "parts/meta.php"; ?>

</head>
<body>

	<div class="container">
		<?php include "parts/navbar.php"; ?>
	</div>

	<div class="container">
		<h2>Latest in Drinking</h2>
		<?php
		recommendedCategory("drinking");
		?>
		<h2>Latest in Eating</h2>
		<?php
		recommendedCategory("eating");
		?>
	</div>



	<?php include "parts/footer.php"; ?>
	
</body>
</html>