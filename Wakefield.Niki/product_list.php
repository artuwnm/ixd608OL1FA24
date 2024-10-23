<!DOCTYPE html>
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
		<div class="card soft">
			

			<ul>
				<!--ul>li*4>a[href="product_item.php"]>{Product $}-->
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		</div>
	</div>






	<?php include "parts/footer.php"; ?>
	
</body>
</html>