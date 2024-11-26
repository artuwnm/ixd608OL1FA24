<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product list</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


<div class="container">
	<h2>Product List</h2>

	<div class="form-control">
		<form class="hotdog dark" id="product-search">
		<input type="search" placeholder="Search">
		</form>
	</div>



	<div class="form-control">
	<div class="display-flex">	
		<div class="flex-stretch display-flex grid gap">
			<div class="flex-none">
				<button data-filter="category" data-value="" type="button" class="form-button filter">All</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="Decks" type="button"	 class="form-button filter">Decks</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="Wheels" type="button" class="form-button filter">Wheels</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="Trucks" type="button" class="form-button filter">Trucks</button>
			</div>
		</div>	
		

		<div class="flex-none">
			<div class="form-select " style="border: 1px solid var(--color-black)">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">High</option>
					<option value="4">Low</option>
				</select>
			</div>
		</div>
	</div>	
	</div>	
</div>		

<div class="container">
	<div class='productlist grid gap'></div>
</div>	






<?php include "parts/footer.php"; ?>

	



</body>
</html>
















_once