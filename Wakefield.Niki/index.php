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

	<?php include "parts/navbar.php"; ?>

	<div class="view-window contain no-repeat" style="background-image: url('img/WhaleShelf.jpg')"></div>
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



	
	
</body>
<?php include "parts/footer.php"; ?>
</html>