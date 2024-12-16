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

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Product List</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>

		<div class="form-control">
			<div class="card light">
				<div class="display-flex flex-wrap">
					<div class="flex-stretch display-flex flex-wrap">
						<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="form-button">All</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="drinking" type="button" class="form-button">Drinking</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="eating" type="button" class="form-button">Eating</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="living" type="button" class="form-button">Living</button>
						</div>
					</div>
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Least Expensive</option>
								<option value="4">Most Expensive</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form-control"></div>
		
		<div class='productlist grid gap'></div>
		
	</div>

</body>
<?php include "parts/footer.php"; ?>
</html>












