<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

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
					<input type="search" placeholder="Search Product">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft">
					<div class="display-flex flex-wrap">
						<div class="flex-stretch display-flex">
							<div class="grid gap">
				
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="living" type="button" class="form-button">Living</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="bedroom" type="button" class="form-button">Bedroom</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="dining" type="button" class="form-button">Dining</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="kitchen" type="button" class="form-button">Kitchen</button>
							</div>
							</div>
						</div>
				
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
									<option value="5">Most Popular</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class='productlist grid gap'></div>
			
	</div>
</body>
</html>