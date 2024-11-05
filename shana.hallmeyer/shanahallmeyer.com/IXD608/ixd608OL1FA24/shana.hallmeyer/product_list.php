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


	<div class="container" id="figures">
	<div class="grid gap">
		<div class="col-xs-12 col-md-6">
			<figure class="figure product-overlay">
			<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
			<div><a href="product_item.php?id=1">Product 1</a></div>
			<div>$3.99</div>
			</div>
			</figcaption>
			</figure>
		</div>
		<div class="col-xs-12 col-md-6">
			<figure class="figure product-overlay">
			<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
			<div><a href="product_item.php?id=2">Product 2</a></div>
			<div>$3.99</div>
			</div>
			</figcaption>
			</figure>
		</div>
		<div class="col-xs-12 col-md-6">
			<figure class="figure product-overlay">
			<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
			<div><a href="product_item.php?id=3">Product 3</a></div>
			<div>$3.99</div>
			</div>
			</figcaption>
			</figure>
		</div>
		<div class="col-xs-12 col-md-6">
			<figure class="figure product-overlay">
			<img src="https://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
			<div class="caption-body">
			<div><a href="product_item.php?id=4">Product 4</a></div>
			<div>$3.99</div>
			</div>
			</figcaption>
			</figure>
		</div>
	</div>
	</div>	


<?php include "parts/footer.php"; ?>

</body>
</html>