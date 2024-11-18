<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>
	<title>Product list</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<h2>Product List</h2>

		<div class="form-control">
			<form>
			<input type="search" class="hotdog dark" placeholder="Search">
			</form>
		</div>
	</div>


<div class="container">
	
<?php 
	

	$result = makeQuery(
		makeConn(),
		"SELECT *
		FROM `products`
		ORDER BY `category` ASC
		LIMIT 12
		");

	echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

	?>

</div>	




<?php include "parts/footer.php"; ?>

	



</body>
</html>
















_once