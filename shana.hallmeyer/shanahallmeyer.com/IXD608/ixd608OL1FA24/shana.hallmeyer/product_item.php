<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>

	<title>Product Item</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container" id="figures"> 
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
			<figure class="figure">
			<img src="https://via.placeholder.com/400x400?text=product" alt="">
			</figure>
			</div>	

			<div class="col-xs-12 col-md-6">
				<h2>Product name</h2>
				<p>Product description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				
				<h4>Size</h4>
				<div class="grid gap display-inline-flex">
				<div class="size">
					<input type="checkbox" id="size-60" class="hidden">
					<label for="size-60">60</label>
				</div>
				<div class="size">
					<input type="checkbox" id="size-58" class="hidden">
					<label for="size-58">58</label>
				</div>
				<div class="size">
					<input type="checkbox" id="size-56" class="hidden">
					<label for="size-56">56</label>
				</div>
				</div>

				<h4>Color</h4>
				<div class="grid gap display-inline-flex">
				<div class="blue-check">
    				<input type="checkbox" id="color-blue" class="hidden">
    				<label for="color-blue"></label>
				</div>
				<div class="yellow-check">
    				<input type="checkbox" id="color-yellow" class="hidden">
    				<label for="color-yellow"></label>
				</div>
				<div class="red-check">
    				<input type="checkbox" id="color-red" class="hidden">
    				<label for="color-red"></label>
				</div>
				</div>

				<div class="form-control"><button class="form-button outline"><a href="cart_confirmation.php?id=1">Add to cart</a></button></div>
			</div>	
			
		</div>
	</div>

	<div class="container" id="figures">
		<h2>Lorem ipsum</h2>
		<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
						</figure>
					</div>
		</div>
	</div>

<?php include "parts/footer.php"; ?>
	
</body>
</html>