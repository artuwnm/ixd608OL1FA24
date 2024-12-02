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


		<div class="container" id="viewwindow">
			<h1>Dozer</h1>
		<div class="view-window" style="background-image: url('img/skateboard-parallax.jpeg');"></div>
		</div>

	

		<div class="container" id="cards">

			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
						<div class="card dark-yellow">Card Dark Yellow</div>
				</div>
				<div class="col-xs-12 col-md-4">
						<div class="card med-blue">Card Medium Blue</div>
				</div>
				<div class="col-xs-12 col-md-4">
						<div class="card dark-red">Card Dark Red</div>
				</div>
			</div>
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













































