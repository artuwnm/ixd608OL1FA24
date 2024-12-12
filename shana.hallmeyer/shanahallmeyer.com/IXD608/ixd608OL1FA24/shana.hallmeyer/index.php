<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>
	<title>Home</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


		<div class="container">
			<h1>Dozer</h1>
			<figure class="figure">
			<img src="img/skateboard-homepage_800.jpg" alt="">
			</figure>
		</div>


<div class="container">
	<h2>New arrivals</h2>
	<?php 
	recommendedCategory("Decks");
	 ?>
</div>

		
<div class="container">
	<h2>Accessories</h2>
	<?php 
	recommendedCategory("Wheels");
	 ?>
</div>		
		


<?php include "parts/footer.php"; ?>





</body>
</html>













































