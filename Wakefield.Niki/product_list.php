<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>niki designs</title>

	<?php include "parts/meta.php"; ?> 

</head>
<body>
	
	<div class="container">

		<?php include "parts/navbar.php"; ?>

		<h2>Product List</h2>
		

		<?php
			
		

		$result = makeQuery(
			makeConn(),
			"
			SELECT * 
			FROM `products`
			ORDER BY `category` 
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'), "</div>";

		?>
		
	</div>




</body>
<?php include "parts/footer.php"; ?>
</html>